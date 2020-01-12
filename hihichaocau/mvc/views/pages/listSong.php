<tbody>
<?php foreach ($data["dataSongs"] as $song) {?>
    <tr data-song-key="<?=base64_encode($song['id'])?>">
        <td><img class="ui middle aligned avatar image"
                src="<?=!empty($song['image']) ? $song['image'] : 'https://stc-id.nixcdn.com/v11/images/avatar_default.jpg'?>"
                data-src="<?=$song['image']?>">
            <span><?=$song['name_song']?></span>
        </td>
        <td><?=$song['name_singer']?></td>
        <td class="action-song" data-song-id="<?=$song['link']?>">
            <i class="circular play icon play-music text-blue link" title="Phát nhạc"></i>
            <i class="circular gift icon text-red"
                title="Gửi bài hát và lời nhắn tới ai đó"></i>
        </td>
    </tr>
<?php }?>
</tbody>
<?php if (isset($data["mode"]) && $data["mode"] == "search") {?>
    <tfoot>
        <td class="notify-red" colspan="3">*Viết đúng tên bài mới tìm thấy. Viết sai thì chịu<br>
            *Viết đúng mà không thấy thì thôi. Chúc may mắn lần sau</td>
    </tfoot>
<?php } else {?>
<tfoot data-count="<?=empty($data["countSong"]) ? 0 : $data["countSong"]?>">
    <td>
        <i class="hand point left outline icon previous"></i>
    </td>
    <td>&nbsp;</td>
    <td>
        <i class="hand point right outline icon next"></i>
    </td>
</tfoot>
<?php }?>