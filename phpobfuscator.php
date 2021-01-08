<?php 
/*
 * phpobfuscator.php
 *
 * Copyright 2021 ph.luffy <ph.luffy>
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.9
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 * MA 02110-1301, USA.
 *
*/

function enc($text){
    $str = $text; 
    $encode = bin2hex($str); 
    $split = chunk_split($encode,2,"\x");
    return "\x".$split;
}

$dec = "ZnVuY3Rpb24gZGVjb2RlX2NvZGUoJGNvZGUpe3JldHVybiBwcmVnX3JlcGxhY2VfY2FsbGJhY2soJ0BcXFwoeCk/KFswLTlhLWZdezIsM30pQCcsZnVuY3Rpb24oJG0pe2lmKCRtWzFdKXskaGV4PXN1YnN0cigkbVsyXSwwLDIpOyR1bmhleD1jaHIoaGV4ZGVjKCRoZXgpKTtpZihzdHJsZW4oJG1bMl0pPjIpeyR1bmhleC49c3Vic3RyKCRtWzJdLDIpO31yZXR1cm4gJHVuaGV4O31lbHNle3JldHVybiBjaHIob2N0ZGVjKCRtWzJdKSk7fX0sJGNvZGUpO30=";
$lulz = "JHdld3M9Y3JlYXRlX2Z1bmN0aW9uKCcka2VrJyxiYXNlNjRfZGVjb2RlKCdaWFpoYkNnaUpHdGxheUlwT3c9PScpKTsKJHRlc3QgPSBkZWNvZGVfY29kZSgkbHVmZnkpOwokd2V3cygkdGVzdCk7";

echo '<form method="POST"><textarea name="plaintext"></textarea><br>';
echo '<input name="sub" value="encode" type="submit"></form>';
$string = $_POST['plaintext'];
if(!empty($string)){
if(isset($_POST['sub'])){
$encode = enc($string);
echo '<textarea rows="20" cols="50">';
echo '<?php&#13;&#10;';
echo '$luffy = "'.$encode.'";&#13;&#10;';
echo base64_decode($dec).';&#13;&#10;';
echo base64_decode($lulz);
echo '&#13;&#10;?>';
echo '</textarea>';
}
} else{
echo 'PHP Obfuscate Tool';
}

?> 
