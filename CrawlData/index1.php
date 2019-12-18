<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script
        src="https://code.jquery.com/jquery-3.4.1.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
</head>
<body>
    <button id="get">Get data</button>
    <script>
        function startAPage()
            {
                allItem = [];
                $.ajax({
                    url : "get_page.php",
                    data : {
                        url : "https://fptshop.com.vn/dien-thoai/nokia"
                    },
                    type : "get",
                    dataType:"text",
                    success : function(result){
                        var html = $.parseHTML(result);
                        var items = $(html).find(".fs-lpil");

                        for (var i = 0; i < items.length; i++)
                        {
                            $this = $(items[i]);
                            var object = "";
                            var name = $this.find(".fs-lpil-name a").text();
                            object += '{"name":'+ '"'+name+'"';
                            var price = $this.find(".fs-lpil-price p").text();
                            object += ',"price":'+ '"' +price+'"';
                            var infor = $this.find(".fs-lpil-tsul ul li");
                            $.each(infor, function(key, value){
                                var tmpInfor = value.textContent;
                                var result = tmpInfor.split(":");
                                if(result[1] != ''){
                                    if (result[1].indexOf('"') > -1)
                                        {
                                            result[1] = result[1].replace('"','');
                                        }
                                    object += ',"'+ result[0].trim() + '":'+ '"' + result[1].trim()+'"';
                                }
                            })
                            object += "}";
                            allItem.push(JSON.parse(object));
                        }
                        console.log(allItem);
                    }
                });
                // return allItem;
            }
            $("#get").click(function(){
                startAPage();
            })
    </script>
</body>
</html>
