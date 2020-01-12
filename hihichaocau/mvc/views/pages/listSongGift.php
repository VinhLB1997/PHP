<tbody>
<?php foreach ($data["dataSongGifts"] as $song) {?>
    <tr>
        <td><img class="ui middle aligned image mini rounded"
                src="<?=!empty($song['image']) ? $song['image'] : 'https://stc-id.nixcdn.com/v11/images/avatar_default.jpg'?>"
                data-src="<?=$song['image']?>">
            <span><?=$song['name_song']?></span>
        </td>
        <td><span class="sub-title">Gửi từ: <i class="info-gift"><?=$song['name_sender']?></i><br>
        Tới: &emsp;&nbsp;<i class="info-gift"><?=$song['name_receiver']?></i><br>
        Lúc: &emsp;<i class="info-gift"><?=date_format(date_create($song['create_at']), 'H:i  d-m-Y')?></i>
        </span></td>
        <td class="action-song" data-song-id="<?=$song['link']?>">
            <i class="circular play icon play-music text-blue link" title="Phát nhạc"></i>
            <i class="circular comment alternate outline icon text-green message-gift"
                title="Xem thông tin bài hát được tặng"></i>
            <input type="hidden" name="song" value="<?=$song['name_song']?>">
            <input type="hidden" name="sender" value="<?=$song['name_sender']?>">
            <input type="hidden" name="receiver" value="<?=$song['name_receiver']?>">
            <input type="hidden" name="image" value="<?=!empty($song['image']) ? $song['image'] : 'https://stc-id.nixcdn.com/v11/images/avatar_default.jpg'?>">
            <input type="hidden" name="time-send" value="<?=date_format(date_create($song['create_at']), 'H:i  d-m-Y')?>">
            <input type="hidden" name="messsage" value="<?=$song['message']?>">
        </td>
    </tr>
    <tr>
<?php }?>
</tbody>
<?php if (isset($data["countSongGift"]) && $data["countSongGift"] > 5) {?>
<tfoot data-count-gift="<?=empty($data["countSongGift"]) ? 0 : $data["countSongGift"]?>">
    <td>
        <i class="fast backward icon previous-gift"></i>
    </td>
    <td>&nbsp;</td>
    <td>
        <i class="fast forward icon next-gift"></i>
    </td>
</tfoot>
<?php } else if ($data["countSongGift"] == 0) {?>
<tfoot>
        <td class="notify-red" colspan="3">*Không có bài hát nào được tặng</td>
</tfoot>
<?php }?>
