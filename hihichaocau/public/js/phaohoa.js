/**
 * X-Team Fireworks
 * @author Andrew Valums
 *
 * Copyright (c) 2009 X-Team, http://x-team.com
 */
if (!Xteam) var Xteam = {};
Xteam.fireworkShow = function(a, c) {
  function e() {
    a = j(a).eq(0);
    a.css("position") == "static" && a.css("position", "relative");
    h = j("<canvas></canvas>");
    if (!h[0].getContext) return false;
    h.attr({ height: a.height(), width: a.width() })
      .css({
        position: "absolute",
        display: "block",
        top: 0,
        left: 0,
        zIndex: 99999
      })
      .appendTo(a);
    n = Xteam.Canvas.scene(h[0]);
    l = setInterval(function() {
      Math.random() > 0.75 || Xteam.firework(n);
    }, 1.5 * c);
    k = true;
  }
  var d = {},
    j = jQuery,
    l,
    n,
    h,
    k = false;
  c = c || 900;
  e();
  d.remove = function() {
    if (k) {
      clearInterval(l);
      n.destroy();
      n = null;
      h.remove();
      a = h = null;
    }
  };
  return d;
};
Xteam || (Xteam = {});
Xteam.firework = function(a) {
  function c() {
    k = 360 * Math.random();
    f = Xteam.Color.hslToRgb([k, Math.random(), 0.2 + 0.8 * Math.random()]);
    i = (a.getCanvas().width - h * 2) * Math.random() + h;
    m = (a.getCanvas().height / 2 - h) * Math.random() + h;
    o = a.getCanvas().height;
    a.register(j);
  }
  function e() {
    if (o > m) {
      o -= 10;
      l.fillStyle = "rgb(" + f[0] + "," + f[1] + "," + f[2] + ")";
      l.beginPath();
      l.arc(Math.round(i), Math.round(o), 2, 0, 2 * Math.PI, true);
      l.fill();
    } else {
      a.remove(j);
      d();
    }
  }
  function d() {
    for (var p = 40 + Math.floor(50 * Math.random()); p--; ) {
      var q = Xteam.Color.hslToRgb([
        k,
        Math.random(),
        0.2 + 0.8 * Math.random()
      ]);
      new n(a, q, i, m, 10);
    }
  }
  var j = { draw: e },
    l = a.getContext(),
    n = Xteam.FireworkParticle,
    h = 70,
    k,
    i,
    m,
    o,
    f;
  c();
  return j;
};
Xteam.FireworkParticle = function(a, c, e, d) {
  this.scene = a;
  this.color = c;
  this.x = Math.round(e);
  this.y = Math.round(d);
  this.rotate = 2 * Math.PI * Math.random();
  this.opacity = 100;
  this.f = 0;
  this.max = 40 + 10 * Math.random();
  this.size = 0;
  this.speed = 4 * Math.random();
  a.register(this);
};
Xteam.FireworkParticle.prototype = {
  getStyle: function() {
    return (
      "rgba(" +
      this.color[0] +
      "," +
      this.color[1] +
      "," +
      this.color[2] +
      "," +
      this.opacity / 100 +
      ")"
    );
  },
  draw: function(a, c) {
    if (this.f < this.max) {
      this.f++;
      this.size += this.speed;
      this.speed *= 0.95;
      if (this.f > 0.8 * this.max) this.opacity -= 6;
      c.lineWidth = 1;
      c.save();
      c.translate(this.x, this.y);
      c.rotate(this.rotate);
      c.strokeStyle = this.getStyle();
      c.beginPath();
      c.moveTo(Math.round(0.85 * this.size), 0);
      c.lineTo(Math.round(this.size), 0);
      c.stroke();
      c.restore();
    } else this.scene.remove(this);
  }
};
Xteam || (Xteam = {});
if (!Xteam.Canvas) Xteam.Canvas = {};
Xteam.Canvas.scene = function(a) {
  function c(f) {
    i.push(f);
  }
  function e() {
    for (var f = m.length; f--; ) i[m[f]] = null;
    m = [];
    for (f = i.length; f--; ) i[f] || i.splice(m[f], 1);
  }
  function d(f) {
    for (var p = i.length; p--; )
      if (f === i[p]) {
        m.push(p);
        break;
      }
  }
  function j() {
    clearInterval(o);
  }
  function l() {
    return k;
  }
  function n() {
    return a;
  }
  var h = { register: c, remove: d, getContext: l, getCanvas: n, destroy: j },
    k = a.getContext("2d"),
    i = [],
    m = [],
    o = setInterval(function() {
      k.clearRect(0, 0, a.width, a.height);
      for (var f = i.length; f--; )
        typeof i[f].draw == "function" && i[f].draw(h, k);
      e();
    }, 30);
  return h;
};
Xteam || (Xteam = {});
if (!Xteam.Color) Xteam.Color = {};
Xteam.Color.hslToRgb = function(a) {
  var c = a[0],
    e = a[1];
  a = a[2];
  if (e == 0) r = g = b = a;
  e = a < 0.5 ? a * (1 + e) : a + e - a * e;
  a = 2 * a - e;
  c /= 360;
  var d = [];
  d[0] = c + 1 / 3;
  d[1] = c;
  d[2] = c - 1 / 3;
  for (c = 3; c--; ) {
    d[c] %= 1;
    d[c] =
      d[c] < 1 / 6
        ? a + (e - a) * 6 * d[c]
        : d[c] < 0.5
        ? e
        : d[c] < 2 / 3
        ? a + (e - a) * 6 * (2 / 3 - d[c])
        : a;
    d[c] *= 255;
    d[c] = Math.floor(d[c]);
    if (d[c] < 0) d[c] = 0;
  }
  return d;
};
Xteam.Color.hslToRgb.test = function() {
  function a(e, d) {
    for (var j = e.lenght; j--; )
      if (e[j] !== d[j]) throw Error("Got " + e + ", expected " + d);
    console.log("success");
  }
  var c = Xteam.Color.hslToRgb;
  a(c([0, 1, 1]), [1, 0, 0]);
  a(c([120, 0.5, 1]), [0.5, 1, 0.5]);
  a(c([240, 1, 0.5]), [0, 0, 0.5]);
  c([104.15549071384422, 0.9040453462245244, 0.2855993456480115]);
};
