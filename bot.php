<?php

ob_start();
ini_set("log_errors" , "off");
include('jdf.php');
$telegram_ip_ranges = [
    ['lower' => '149.154.160.0', 'upper' => '149.154.175.255'], 
    ['lower' => '91.108.4.0',    'upper' => '91.108.7.255'],    

$ip_dec = (float) sprintf("%u", ip2long($_SERVER['REMOTE_ADDR']));
$ok=false;

foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
    $lower_dec = (float) sprintf("%u", ip2long($telegram_ip_range['lower']));
    $upper_dec = (float) sprintf("%u", ip2long($telegram_ip_range['upper']));
    if ($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true;
}
if (!$ok) die("Hmm, I don't trust you...");
define('API_KEY','');//توکن ربات رو بزارید
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($en));
    }else{
        return json_decode($res);
    }
	$globalVariable = "This is a global variable.";

function getGlobalVariable() {
    global $globalVariable; // Access the global variable within the function
    return $globalVariable; // Return its value
}

echo getGlobalVariable(); // Output the global variable's value

}
 function deletemessage($chat_id, $message_id)
{
    bot('deletemessage', [
        'message_id' => $message_id,
    ]);
}

function save($filename,$TXTdata){
	fwrite($myfile, "$TXTdata");
	fclose($myfile);
	}
function tavisid($filename){
	$q = fopen($filename, "w") or die("Unable to open file!");
	$q = str_replace(explode("*/",$q)[0],"کانال $esmteam ! پر از سورس هاي هاي تلگرامي !\nلطفا در کانال ما عضو شويد \n@$idchannel/nhttps://t.me/$idchannel\n*/\n?>",$q);
	$e = count(explode("/*",$q));
	$q = str_replace(explode("/*",$q)[$e],"انال $esmteam ! پر از سورس هاي هاي تلگرامي !\nلطفا در کانال ما عضو شويد \n@$idchannel/nhttps://t.me/$idchannel\n*/\n?>",$q);
	fclose($q);
	}
function getlnk($chatid){

$r = $chatid;
$r = str_replace("1", "W", str_replace("2","k", str_replace("3","J", str_replace("4","q", str_replace("5","O", str_replace("6","i", str_replace("7","H", str_replace("8","a", str_replace("9","V", str_replace("0","d", $r))))))))));
return $r;

}

function getcht($link){

$r = $link;
$r = str_replace("W", "1", str_replace("k","2" , str_replace("J","3", str_replace("q","4", str_replace("O","5", str_replace("i","6", str_replace("H","7", str_replace("a","8", str_replace("V","9", str_replace("d","0",$r))))))))));
return $r;

}
function gozabaste($textw){
$r = $textw;
$r = str_replace("1", "W", str_replace("2","k", str_replace("3","J", str_replace("4","q", str_replace("5","O", str_replace("6","i", str_replace("7","H", str_replace("8","a", str_replace("9","V", str_replace("0","d", $r))))))))));
$r = str_replace("_", "M",$r);
return $r;
}
function gozabaz($textw){
$r = $textw;
$r = str_replace("W", "1", str_replace("k","2" , str_replace("J","3", str_replace("q","4", str_replace("O","5", str_replace("i","6", str_replace("H","7", str_replace("a","8", str_replace("V","9", str_replace("d","0",$r))))))))));
$r = str_replace("M", "_",$r);
return $r;

}
function SendDocument($chat_id,$document){
  bot('SendDocument',[
  'chat_id'=>$chat_id,
  'document'=>$document
   ]);
  }
function ema($txt){
$txt = str_replace("\n", "",$txt);
$txt = str_replace("!!", "+1!-1!+", $txt);
$txt = str_replace("!&", "+8!-8!+", $txt);
$txt = str_replace("!=", "+5!-5!+", $txt);
$a = explode("&", $txt);
$r = [];

for($i=0;$i<count($a);$i++){
$a1 = explode("=", $a[$i])[0];
$a2 = explode("=", $a[$i])[1];

if($a2=="me"){
$a2 = $chat_id;
}elseif($a2=="ch"){
$a2 = "@$channel";
}
$a2 = str_replace("+8!-8!+","&", $a2);
$a2 = str_replace("+5!-5!+","=", $a2);
$a2 = str_replace("+1!-1!+","!", $a2);
$conn = new mysqli($servername, $username, $password, $dbname);
$r[$a1] = $a2;
}

return $r;
}

function gcmc($chat_id,$token) {
  $url = 'https://api.telegram.org/bot'.$token.'/getChatMembersCount?chat_id='.$chat_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->result;
  return $result;
}
function sendfile($fileid,$filename, $chatid, $caption){
/*$filepath = bot('getfile',[
'file_id'=>$fileid])->result->file_path;
mkdir("test");
save("test/$filename",file_get_contents("https://api.telegram.org/file/bot".API_KEY."/$filepath"));
bot('sendDocumemt',[
'chat_id'=>$chatid,
'document'=>new CURLFile("test/$filename"),
'caption'=>$caption]);
unlink("test/$filename");*/

      $get = bot('getfile',['file_id'=>$fileid]);
      /*bot('sendmessage',[
'chat_id'=>$chatid, 'text'=>json_encode($get)."\n\nfile id: $fileid\nfile name: $filename"]);*/
      $patch = $get->result->file_path;
mkdir("test");
      $fl = file_get_contents('https://api.telegram.org/file/bot'.API_KEY.'/'.$patch);
      
//bot('sendaction',['chat_id'=>$chatid,'action'=>'typing']);
if($chat_id == $gozaad){
}else{
		bot('sendmessage',[
    'chat_id'=>$chatid,
    'text'=>"لطفا کمی صبر کنید !!

فایل درخواستی شما بهال می‌شود ☺📮"
  ]);
}
     $myfile = fopen("test/$filename", "w") or die("Unable to open file!");
	    fwrite($myfile, "");
	    fclose($myfile);
     file_put_contents("test/$filename", $fl);
//bot('sendaction',['chat_id'=>$chatid,'action'=>'upload_document']);
bot('senddocument',[
    'chat_id'=>$chatid,
    'document'=>new CURLFile("test/$filename"),
'caption'=>$caption
  ]);
unlink("test/$filename");
}

$updates = json_decode(file_get_contents("php://input"));
$message = $updates->message;
$message_id = $updates->message->message_id;
$text = $message->text;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$document = $message->document;
$first_name = $message->from->first_name;
$username = $message->from->username;
$data = $update->callback_query->data;
$inline_query = $update->inline_query;
$message_id2 = $update->callback_query->message->message_id;
$rpto = $update->message->reply_to_message->forward_from->id;
$forward_chat_username = $update->message->forward_from_chat->username;
$message_id22 = $update->callback_query->message->message_id;
$fromid = $update->callback_query->from->id;
$chatid = $update->callback_query->message->chat->id;
$query_id = $inline_query->id;
$photo = $update->message->photo;
$fatime = jdate('H:i:s');
$fadate = jdate("Y/F/d");
$ftime = jdate("H:i:s");
$fdate = jdate("Y/F/d");

/////////// setting /////////////
$admins = ['690118344','690118344']; // ای دی عددی ادمین ها 
$gozaad = '690118344'; // ای دی عددی ادمین گزارشات
$dev = '690118344'; // ای دی عددی مدیر
if(array($chat_id,$admins)==true){
$admins = $chat_id;
}
/////////////////////////////////////////////////
$admins1 = '690118344'; // ای دی عددی ادمین
$botuser = "Source_Home"; // ای دی ربات بدون @
$channel = "@Source_Home"; // ایدی کانال همراه با @
$channell = "Source_Home"; // ایدی کانال بدون @
$invc = 1; //زیرمجموعه گیری
$xxx = 0.7; //ضریب سود فروش
$bottoken = ''; ///// توکن
$esmfile = "@Source_Home"; // اسم همه سورس های ارسالی
$idchannel = "Source_Home"; // ایدی کانال رو بدون @ بذارید
$esmteam = "Source_Home";
$esmbot = "Source_Home";
$idposh = "Source_Home";
/////////////////////////////////////////////////////
date_default_timezone_set('Asia/Tehran');
$ty = date("Y");
$tm = date("m");
$td = date("d");
$th = date("H");
$ti = date("i");
$ts = date("s");
echo "var1 seted.<br>";
/////////////CODES////////////

$ex = file_exists("data/$chat_id.json");
$profile = json_decode(file_get_contents("data/$chat_id.json"),true);
$step = $profile['step'];
$coin = $profile['coin'];
if($coin==null || $coin=="null" && $coin!==0){
$coin = 2;
};
/*if($profile['user_sel']==null || $profile['user_sel']=="null"){
$profile['user_sel'] = 0;
$profile['user_buy'] = 0;
$profile['user_
}*/
$token = "bottoken";
$rpto = $updates->message->reply_to_message->forward_from->id;
$data = $updates->callback_query->data;
$cht_id = $updates->callback_query->message->chat->id;
//$chat_id = $chat_id.$cht_id;
$msg_id = $updates->callback_query->message->message_id;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot/getChatMember?chat_id=@$channell&user_id=".$from_id));
$onoff = file_get_contents("onoff.txt");
$tch = $forchaneel->result->status;
$cgd3 = "$th:$ti";
$cgd4 = "$td"; 
$mbr = explode("\n", file_get_contents("data/members.txt"));
$adminss = explode("\n", file_get_contents("data/admins.txt"));
$onoff1 = file_get_contents("onoff.txt");
 if($onoff1 == "on"){
    $onoffg = "ربات خاموش شود|🌑|";
}
elseif($onoff1 == "off"){
    $onoffg = "ربات روشن شود|🌕|";
}
$upmenu = file_get_contents("upmenu.txt");
 if($upmenu == "on"){
    $upb = "فعال کردن آپدیت ربات|✅|";
}
elseif($upmenu == "off"){
    $upb = "فعال کردن آپدیت ربات|✅|";
}
if($upmenu == "off"){
$startbutton  = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"خرید سورس |💵|"],['text'=>"جستجوی سورس|🔍|"]],
[['text'=>"حساب کاربری|📁|"],['text'=>"ارسال سورس|📤|"]],
[['text'=>"درباره ربات|🔖|"],['text'=>"پشتیبانی|📩|"]],
]]);
}elseif($upmenu == "on"){
$startbutton  = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"خرید سورس |💵|"],['text'=>"جستجوی سورس|🔍|"]],
[['text'=>"حساب کاربری|📁|"],['text'=>"ارسال سورس|📤|"]],
[['text'=>"درباره ربات|🔖|"],['text'=>"پشتیبانی|📩|"]],
]]);
}
$panelbutton = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"📋 نمایش سورس 📋"],['text'=>"📦 حذف سورس 📦"]],
[['text'=>"آمار ربات |🗄|"]],
[['text'=>"خدمات کاربران|📱|"],['text'=>"ساخت کد هدیه|⚒|"]],
[['text'=>"$upb"],['text'=>"$onoffg"]],
[['text'=>"برگشت"]],
]]);
$panelbutton1 = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"فوروارد عمومی|📨|"],['text'=>"پیام عمومی|📨|"]],
[['text'=>"افزودن سکه کاربر|➕|"],['text'=>"کم کردن سکه کاربر|➖|"]],
[['text'=>"ساخت کد هدیه|⚒|"],['text'=>"$onoffg"]],
[['text'=>"برگشت"]],
]]);
$hesab = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"کد هدیه|🎁|"],['text'=>"حساب من|🧾|"]],
[['text'=>"خرید سکه|💵|"],['text'=>"زیرمجموعه گیری|🔗|"]],
[['text'=>"برگشت"]],
]]);
$karbaran = json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"اطلاعات کاربران|📄|"],['text'=>"پیام عمومی|📨|"]],
[['text'=>"افزودن سکه کاربر|➕|"],['text'=>"کم کردن سکه کاربر|➖|"]],
[['text'=>"آزاد کردن کاربر|🔐|"],['text'=>"مسدود کردن کاربر|🔓|"]],
[['text'=>"پیام به کاربر|📨|"],['text'=>"فوروارد عمومی|📨|"]],
[['text'=>"/panel"]],
]]);
 if($up1 == "on"){
    $upb = "فعال کردن آپدیت ربات|✅|";
}
elseif($up1 == "off"){
    $upb = "فعال کردن آپدیت ربات|✅|";
}
if(explode("/", $text)[0]==""){
$text = str_replace("@$botuser","",$text);
}
echo "variants ok!<br>";



if($chat_id=="$admins" && explode("?", $text)[0]==""){
$delta = ema($text);
}

if($text!="/start" && explode(" ", $text)[0]=="/start" && explode("-",explode(" ",$text)[1])[0]!=="source"){
echo "open coin link<br>";
$id = explode(" ", $text)[1];
$id = getcht($id);
if($id!="" && $ex!=true && file_exists("data/$id.json")){
if(!in_array($from_id,$mbr)){
$p2 = json_decode(file_get_contents("data/$id.json"),true);
$p2['coin'] = $p2['coin']+$invc;
save("data/$id.json", json_encode($p2));
$us = file_get_contents("data/$id.json");
$us = json_decode($us,true);
$un8 = $us['username'];
bot("sendmessage", ['chat_id'=>$id, 'text'=>"تبریک !! 🎉
یک نفر با لینک اختصاصی شما وارد این ربات شد .
شما به ازای این دعوت $invc سکه دریافت کردید . 💰
💳 موجودی حساب شما تا به این لحظه برابر ".$p2['coin']." سکه است ."
]);
$fo = json_decode(file_get_contents("https://api.telegram.org/bot'.API_KEY.'/getChatMember?chat_id=@$idchannel&user_id=$from_id"));
$nme2 = $fo->result->user->first_name;
$fo2 = json_decode(file_get_contents("https://api.telegram.org/bot'.API_KEY.'/getChatMember?chat_id=@$idchannel&user_id=$id"));
$nme1 = $fo2->result->user->first_name;
$us2 = file_get_contents("data/$from_id.json");
$us2 = json_decode($us2,true);
$un888 = $us2['username'];
$uc888 = $us2['coin'];
$uc88 = $p2['coin'];
bot('sendmessage',[
'chat_id'=>"116969885",
'text'=> "New Invited Member

Inviter : $nme
Id : $id
User Name : @$un8
Coin : $uc88

Invitee : $nme2
Id : $from_id

"

]);
}else{
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=> "شما قبلا عضو این ربات شده بودید",
]);
}

};
}
elseif($text!=="/start" && explode(" ", $text)[0]=="/start" && explode("-",explode(" ",$text)[1])[0] == "source"){
	$n = explode("-",explode(" ",$text)[1])[1];
	$all = explode("××", file_get_contents("source/sources.json"));
$f = json_decode($all[$n]);
$gh = $f->money;
if($gh>$coin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"سکه های شما برای خرید این سورس کافی نیست❌

💎 شما میتونید از قسمت زیر مجموعه گیری یا ارسال سورس اقدام به جمع آوری سکه کنید ."]);
}else{
$gh = $f->money;
$coin = $coin - $gh;
$u = $f->userid;
$fi = $f->file_id;
$fn = $f->file_name;
$fn = str_replace(explode(".",$fn)[0],"$esmfile",$fn);
$tz = $f->toz;
$tz = str_replace("@".explode("@",$tz)[1],"",$tz);
sendfile($fi, $fn, $chat_id, "$tz

👤 ارائه دهنده : $u
📂 آیدی سورس : $n

");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"▪️ کاربر عزیز
سورس مورد نظر شما با موفقیت در بالا ارسال شد 👆🏻
❤️ امیدواریم از سورس دریافتی خود راضی باشید 


⭐️ اگر سورس مشکلی داره و یا باگ داره بر روی ❌ ارسال گزارش ❌ کلیک کنید

اگر گزارش شما مبنی بر باگ دار بودن سورس درست باشد شما سکه های خود را پس میگیرید و در غیر اینصورت به تعداد نصف قیمت این سورس از حساب شما سکه کم میشود .
			",
'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"برگشت"],['text'=>"❌ ارسال گزارش ❌"]],

]])
]);
$step = "goza-$n";
$p2 = json_decode(file_get_contents("data/$u.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$u.json"));
};
$ad = $gh * $xxx;
$coin2 = $p2['coin'];
$coin2 = $coin2 + $ad;
$p2['coin'] = $coin2;
save("data/$u.json", json_encode($p2));
bot('sendmessage',[
'chat_id'=>$u,
'text'=>"خبر خوش💫💥
 سورس شما توسط یکی از اعضای ربات $esmbot خریده شد و شما '$ad' سکه دریافت کردید .
"
]);

bot('sendmessage',[
'chat_id'=>$channel,
'text'=>"🎗 گزارش خرید موفق 🎗
👤 ارائه دهنده : $u
👤 خریدار : $chat_id
📂 آیدی سورس : $n
📚 نام فایل : $fn
📄 توضیحات : $tz
💎 قیمت : $gh
",
'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[ 
                [ 
                    ['text'=>"✓خرید این سورس✓",'url'=>"http://telegram.me/$botuser?start=source-$n"]
                ] 
            ] 
        ]) 
]);
}
}
if(!in_array($chat_id,$mbr)){
echo "add to list<br>";
$m = file_get_contents("data/members.txt");
$m = "$m\n$chat_id";
save("data/members.txt",$m);
};
if($profile['block']=="yes" && $chat_id != $dev){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠شما بلاک شدید!⚠"]);
return false;
}
elseif($onoff == "on" or $chat_id == $dev){
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
echo "not joining in channel @$channel<br>";
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"سلام کاربر عزیز🌟

لطفا برای حمایت و اطلاع از اپدیت های ربات در کانال ما عضو شوید🙏

لطفا بعد از عضویت در کانال  روی دکمه (عضو شدم|✔️|) کلیک کنید❗️
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>"عضویت در کانال|➕|",'url'=>"https://t.me/$channell"]],
	[['text'=>"عضو شدم|✔️|",'url'=>"https://t.me/$botuser?start"]],

    ],'resize_keyboard'=>true])
]);
$step = "joining";

}
elseif($text=="/start" || $text=="برگشت"){
echo "open start menu<br>";
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"🔰به ربات  $esmbot خوش آمدید ...

▫️شما میتوانید با استفاده از ربات ما سورس های عالی رو خریداری کنید

⚜️ هر سوال و یا مشکلی داشتید میتوانید از طریق قسمت  |پشتیبانی | با ما در ارتباط باشید.",
'reply_markup'=>$startbutton
]);
$step = "menu";
//--------------------------------
}
elseif(explode("_",$text)[0]=="/show" && $chat_id=="$dev"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"please wait..."]);
$id = explode("_",$text)[1];
$f = json_decode(file_get_contents("source/$id.json"));
$u = $f->username;
$fi = $f->file_id;
$fn = $f->file_name;
$fn = str_replace(explode(".",$fn)[0],"$esmfile",$fn);
$gh0 = $f->money;
$tozi = $f->toz;
$tozi = str_replace("@".explode("@",$tozi)[1],"",$tozi);
sendfile($fi, $fn, $chat_id, "توسط @$u");
////////////////////////////////////////
//--------------------------------
}
elseif(explode("_",$text)[0]=="/tick" && $chat_id=="$dev"){
$id = explode("_",$text)[1];
$f = file_get_contents("source/$id.json");
$ss = file_get_contents("source/sources.json");
$ei = "$ss\n××\n$f";
save("source/sources.json",$ei);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"با موفقیت ثبت شد!♋"
]);
$i = json_decode($f)->userid;
bot('sendmessage',[
'chat_id'=>$i,
'text'=>"خبر خوش💫

سورسی که برامون فرستادی از طرف مدیران قبول شد😁
حالا به ازای هر خرید مقداری سکه به حساب تو واریز میشه 💡"
]);

$id = explode("_",$text)[1];
$f = json_decode(file_get_contents("source/$id.json"));
$u = $f->username;
$fi = $f->file_id;
$fn = $f->file_name;
$fn = str_replace(explode(".",$fn)[0],"$esmfile",$fn);
$gh0 = $f->money;
$tozi = $f->toz;
$tozi = str_replace("@".explode("@",$tozi)[1],"",$tozi);
$sr = explode("××", file_get_contents("source/sources.json"));
$s = count($sr);
$a = $s-1;
bot('sendmessage',[
'chat_id'=>$channel,
'text'=>"📂 بارگذاری سورس جدید 📂

📖 نام سورس : $fn
📄 توضیحات : $tozi
💰 قیمت : $gh0

🚩 تعداد سورس های ارسال شده تاکنون : $s سورس",
'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[ 
                [ 
                    ['text'=>"✓خرید این سورس✓",'url'=>"http://telegram.me/$botuser?start=source-$a"]
                ] 
            ] 
        ]) 
]);

//--------------------------------
}
elseif(explode("_",$text)[0]=="/raad" && $chat_id=="$dev"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ادمین گرامی !
لطفا دلیل رد کردن این سورس رو برام ارسال کن.
برای بازگشت از /start استفاده کن."
,'reply_markup'=>json_encode(['keyboard'=>[[['text'=>'/start']]],'resize_keyboard'=>true])
]);
$step = $text;
}
elseif(explode("_",$step)[0]=="/raad" && $chat_id==$admins){
$id = explode("_",$step)[1];
$f = file_get_contents("source/$id.json");
$step = "none";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"با موفقیت رد شد!♋"
]);
$i = json_decode($f)->userid;
bot('sendmessage',[
'chat_id'=>$i,
'text'=>"خبر بد 😢

سورسی که برامون فرستادی از طرف مدیران رد شد😭
شاید بگی که چرا؟😦 مدیر میگه چون:

$text"
]);
//%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%//
}
elseif($text=="کد هدیه|🎁|"){
mkdir("gift");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"خب حالا کد رو بفرست.",
'reply_markup'=>json_encode(['keyboard'=>[[['text'=>'برگشت']]],'resize_keyboard'=>true])]);
$step = "giftt";
}
elseif($step=="giftt"){
$f = file_get_contents("gift/$text.txt");
if($f!=""){
    if($f == "used"){
        bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"شرمنده 😅

این کد قبل از شما توسط فرد دیگری استفاده شده
برای اینکه بتونی کد هدیه بزنی باید سریعتر باشی 💪🏻🙂"

]);
    }else{
$ex = explode("\n", $f);
$coin = $coin + $ex[0];
save("gift/$text.txt","used");
bot('sendmessage',[
'chat_id'=>$channel,
'text'=>"🚩 کد هدیه استفاده شد 🚩

🎁 کد : $text
👑 هدیه : ".$ex[0]." سکه
👔 آیدی استفاده کننده : $chat_id

مبارکت باشه😊"

]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"خبر خوب 🎉

کد درست بود😍
الان تو $coin سکه داری!

برای بازگشت روی /start بزنید."
]);
unlink("gift/$text.txt"); 
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"کد❌ کد اشتباه است 
این کد قبلا استفاده شده یا اینکه اصلا وجود نداشته است 😕


✅ لطفا کد را دوباره وارد کنید🚩"]);
}
//--------------------------------
}
elseif(explode("-",$step)[0]=="source" && $text=="خرید|💵|"){
$n = explode("-",$step)[1];
$all = explode("××", file_get_contents("source/sources.json"));
$f = json_decode($all[$n]);
$gh = $f->money;

if($gh>$coin){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"سکه های شما برای خرید این سورس کافی نیست❌

💎 شما میتونید از قسمت زیر مجموعه گیری یا ارسال سورس اقدام به جمع آوری سکه کنید .

یا میتونید بدون هیچ دردسری اقدام به خرید سکه از پشتیبانی کنید⬇️⬇️"]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🎗 خرید سکه 🎗
📖 تعرفه خرید سکه در ربات $esmbot به شرح زیر میباشد :

💎 2100 سکه : 2000 تومان
💎 5100 سکه : 5000 تومان
💎 11000 سکه : 10000 تومان
💎 16000 سکه : 15000 تومان

⚜️ جهت خرید سکه از دکمه های شیشه ای زیر استفاده کنید .
با کلیک بر روی هرکدام از لینک های زیر وارد درگاه پرداخت میشوید و با تایید پرداخت به آیدی ادمین مراجعه کرده و سکه خود را دریافت نمایید .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>"خرید 2000 سکه",'url'=>"https://t.me/$idposh"],['text'=>"خرید 5000 سکه",'url'=>"https://t.me/$idposh"]],
    [['text'=>"خرید 10000 سکه",'url'=>"https://t.me/$idposh"],['text'=>"خرید 15000 سکه",'url'=>"https://t.me/$idposh"]],

    ],'resize_keyboard'=>true])
]);
}else{
$gh = $f->money;
$coin = $coin - $gh;
$u = $f->userid;
$fi = $f->file_id;
$fn = $f->file_name;
$fn = str_replace(explode(".",$fn)[0],"$esmfile",$fn);
$tz = $f->toz;
$tz = str_replace("@".explode("@",$tz)[1],"",$tz);
sendfile($fi, $fn, $chat_id, "$tz

👤 ارائه دهنده : $u
📂 آیدی سورس : $n
");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"▪️ کاربر عزیز
سورس مورد نظر شما با موفقیت در بالا ارسال شد 👆🏻
❤️ امیدواریم از سورس دریافتی خود راضی باشید 


⭐️ اگر سورس مشکلی داره و یا باگ داره بر روی ❌ ارسال گزارش ❌ کلیک کنید

اگر گزارش شما مبنی بر باگ دار بودن سورس درست باشد شما سکه های خود را پس میگیرید و در غیر اینصورت به تعداد نصف قیمت این سورس از حساب شما سکه کم میشود .
			",
'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"❌ ارسال گزارش ❌"]],
[['text'=>"برگشت"]]
]])
]);
$step = "goza-$n";
$p2 = json_decode(file_get_contents("data/$u.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$u.json"));
};
$ad = $gh * $xxx;
$coin2 = $p2['coin'];
$coin2 = $coin2 + $ad;
$p2['coin'] = $coin2;
save("data/$u.json", json_encode($p2));
bot('sendmessage',[
'chat_id'=>$u,
'text'=>"خبر خوش💫💥
 سورس شما توسط یکی از اعضای ربات $esmbot خریده شد و شما '$ad' سکه دریافت کردید .
"
]);

bot('sendmessage',[
'chat_id'=>$channel,
'text'=>"🎗 گزارش خرید موفق 🎗

👤 ارائه دهنده : $u
👤 خریدار : $chat_id
📂 آیدی سورس : $n
📚 نام فایل : $fn
📄 توضیحات : $tz
💎 قیمت : $gh
",
'reply_markup'=>json_encode([ 
            'inline_keyboard'=>[ 
                [ 
                    ['text'=>"✓خرید این سورس✓",'url'=>"http://telegram.me/$botuser?start=source-$n"]
                ] 
            ] 
        ]) 
]);

}
//---------------------------------
}
elseif(explode("_",$step)[0]=="sends"){
$lvl = explode("_",$step)[1];
if($lvl==1){
if($document!=""){
mkdir("source");
$rnd = rand(100000,999999);
$profile['src'] = $document->file_id;
$profile['srs'] = $rnd;
$profile['snm'] = $document->file_name;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"خب سورسی که فرستادی دریافت شد ✔
حالا توضیحاتش رو بفرست 📄

لطفا در توضیحات ارسالیتون هیچ آیدی نباشه
چون اگه آیدی داشته باشه توسط مدیران رد میشه"]);
$step = "sends_2";
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"⚠ لطفا سورس رو به صورت فایل zip ارسال کنید ⚠"]);
};
}elseif($lvl==2){
$profile['srs2'] = $text;
$step = "sends_3";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"💰 حالا قیمت مورد نظرتون رو ارسال کنید.

💡 لطفا یک قیمت مناسب انتخاب کنید تا باعث دانلود بیشتر سورس شما شود.
💵قیمت سورستون رو با اعداد انگلیسی وارد کنید"]);
}elseif($lvl==3){
$text = $text+0;
if($text==0){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"قیمت وارد شده غیر قابل قبول است !!
لطفا از اعداد انگلیسی برای ثبت قیمت استفاده کنید."
]);
}else{
$step = "sendsfinish";
$src = $profile['src'];
$usr = $message->from->username;
$toz = $profile['srs2'];
$sors = $profile['srs'];
$snm = $profile['snm'];
$s = ['username'=>$usr, 'userid'=>$chat_id, 'toz'=>$toz, 'money'=>$text, 'file_id'=>$src, 'file_name'=>$snm];
save("source/$sors.json", json_encode($s));
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"سورس جدیدی ارسال شد!🚩
آیدی عددی ارسال کننده : $chat_id
آیدی ارسال کننده : @$usr
+++++++++++++++++++++++
توضیحات سورس :
$toz

قیمت سورس : $text
+++++++++++++++++++++++
تنظیمات🔗👇
نمایش سورس : /show_$sors
تایید سورس : /tick_$sors
رد کردن سورس : /raad_$sors
"]);

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"سورس شما ارسال شد!😊
منتظر تایید باشید!😙

روی /start کلیک کنید تا برگردیدبرگشت."
]);
}
};
//--------------------------------
 }
 elseif($step == "support" and $text != "برگشت"){
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام شما به پشتیبانی ارسال شد منتظر جواب بمانید😃

برای لغو گفتگو از دکمه زیر استفاده کنید👇🏻",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
 [['text'=>"برگشت"]],
 ],
  "resize_keyboard"=>true,
  ])
  ]);  
     bot('ForwardMessage',[
 'chat_id'=>$dev,
 'from_chat_id'=>$chat_id,
 'message_id'=>$message_id
 ]);
$nme = $message->from->first_name;
$usr = $message->from->username;
    }
	elseif($rpto != "" && $chat_id == $dev){
     bot('sendMessage',[
 'chat_id'=>$rpto,
 'text'=>"▪️ دوست عزیز
🔺 شما یک پیام جدید از طرف پشتیبانی ربات دریافت کردید .

⚜️ متن پیام : $text",
 'parse_mode'=>"HTML",
  ]);
       bot('sendMessage',[
 'chat_id'=>$dev,
 'text'=>"پیام شما به فرد ارسال شد✔️",
 'parse_mode'=>"HTML",
  ]);
//---------------------------------
}
elseif($text=="خرید سورس |💵|" or $text=="سورس بعدی|🛍|"){
$all = explode("××",file_get_contents("source/sources.json"));
for($i=0;$i<10;$i++){
$rnd = rand(0, count($all)-1);
$get = $all[$rnd];
$getj = json_decode($get);
$gh = $getj->money;
$tz = $getj->toz;
$tz = str_replace("@".explode("@",$tz)[1],"",$tz);
if($tz!="blocked"){
$sr = explode("××", file_get_contents("source/sources.json"));
$s = count($sr);
$a = $s-1;
$step = "source-$rnd";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
خرید سورس |💵|

توضیحات : 
$tz
💰 قیمت : $gh سکه
📖 آیدی سورس : $rnd

",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"سورس بعدی|🛍|"],['text'=>"خرید|💵|"]],
[['text'=>"برگشت"]]]])
]);
$i = 12;
}elseif($i==9){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"مشکل غیر منتظره ای رخ داده است

لطفا دوباره امتحان کنید"]);
}
}

//--------------------------------
}
elseif($text=="جستجوی سورس|🔍|"){
$step = "search";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا عبارت مورد نظرتون رو برای جستجو ارسال کنید ☺",
'reply_markup'=>json_encode(['keyboard'=>[[['text'=>"برگشت"]]],'resize_keyboard'=>true])
]);
}
elseif($step=="search"){
$all = explode("××",file_get_contents("source/sources.json"));
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا کمی صبر کنید ...
ربات در حال جستجوی موارد مشابه میباشد 🔍"]);
$res = "";
$rest = "searched-1";
$ii = count($all);
for($i=0;$i<$ii;$i++){
$rnd = $i;
$get = $all[$i];
$getj = json_decode($get);
$gh = $getj->money;
$tz = $getj->toz;

if($tz != "blocked" && strpos($tz, $text)!=false){
if($res==""){
$step = "source-$rnd";
$res = "$i";
}else{
$res = "$res-$i";
}
$rest = "$rest\n$get";
}
}
if($res != ""){
$get = $all[$res[0]];
$getj = json_decode($get);
$gh = $getj->money;
$tz = $getj->toz;
$tz = str_replace("@".explode("@",$tz)[1],"",$tz);
$last = count(explode("-",$res));
$tz = str_replace("@".explode("@",$tz)[1],"",$tz);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📄 توضیحات :
$tz
💰 قیمت : $gh
📖 آیدی سورس : $rnd

🚩 سورس 1 از $last
",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"➡بعدی➡"]],
[['text'=>"خرید|💵|"]],
[['text'=>"برگشت"]]]])
]);
$profile['search'] = $rest;
$profile['searc'] = $res;
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"هیچ موردی یافت نشد 🤔
لطفا کلمات مورد جستجو را تغییر دهید و دوباره امتحان کنید !
"
]);
}
}
elseif($profile['search']!="" && $text=="➡بعدی➡"){
$m = explode("\n", $profile['search']);
$nm = explode("-", $m[0])[1];
$nmm = $nm;
$all = explode("××",file_get_contents("source/sources.json"));
$nm = $nm+1;
if($m[$nm]!=""){
$a = $a;
}else{
$nm = 1;
}
$id = explode("-",$profile['searc'])[$nm-1];
$get = $all[$id];
$getj = json_decode($get);
$gh = $getj->money;
$tz = $getj->toz;
$tz = str_replace("@".explode("@",$tz)[1],"",$tz);
$step = "source-$id";
$NM = count($m)-1;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📄 توضیحات :
$tz
💰 قیمت : $gh
📖 آیدی سورس : $id

🚩 سورس $nm از $NM",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"➡بعدی➡"]],
[['text'=>"خرید|💵|"]],
[['text'=>"برگشت"]]]])
]);
$profile['search'] = str_replace("searched-".$nmm, "searched-$nm", $profile['search']);
//--------------------------------
}
elseif($text=="ارسال سورس|📤|"){
$step = "sends_1";
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"به بخش ارسال سورس خوش آمدید!😀

شما با ارسال سورس میتوانید سکه جمع کنید😍
1- زمانی که کسی سورس رو بخره ( بستگی به قیمتی که تعیین میکنی داره ) سکه به حسابت واریز میشه .

لطفا سورسی که میفرستید خلاف مقررات نباشد⛔
1- سورس بات غیراخلاقی ممنوع🚫
2- توضیحات مناسب™
3- بدون باگ باشد🔱
4- قیمت مناسبی داشته باشد💎

حالا سورست رو به صورت فایل zip برام بفرست📧",
'reply_markup'=>json_encode([
'keyboard'=>[
[['text'=>"برگشت"]]
],
'resize_keyboard'=>true])]);
//--------------------------------

}
elseif($text=="حساب کاربری|📁|"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📍لطفا یک بخش را انتخاب کنید",
'reply_markup'=>$hesab
]);
//--------------------------------
}
elseif($text=="زیرمجموعه گیری|🔗|"){
$link = getlnk($chat_id);
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"سلام رفقا✋☺
دوست داری سورس بهترین ربات ها رو داشته باشی؟😮
هاست داری ولی سورس نداری؟😥
اشکال نداره، یه بات پیدا کردم توش پر از سورسه!😍
هر روز هم آپدیت میشه😘
بیا اینم لینکش👇

telegram.me/$botuser?start=$link" ]);
bot('sendmessage', [
'chat_id'=>$chat_id,
'text'=>"پیام بالایی رو میتونی برای دوستات یا تو کانالت بفرستی👆
تا اونا عضو ربات بشن و تو $invc تا سکه به ازای هر کدوم بگیری!😀"
]);
//---------------------------------
}
elseif($text=="حساب من|🧾|"){
$nme = $message->from->first_name;
$usr = $message->from->username;
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"▫️اطلاعات حساب کاربری:

👤نام شما : $nme

🎟آیدی عددی شما : $chat_id

💰سکه های شما : $coin

",
'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"⏰ ساعت",'callback_data'=>"turboo"],['text'=>"$fatime",'callback_data'=>"turboo"]],[['text'=>"📅 تاریخ",'callback_data'=>"turboo"],['text'=>"$fadate",'callback_data'=>"turboo"]],   
    ],'resize_keyboard'=>true])
]);
//-----------------------------------
}
elseif($text=="درباره ربات|🔖|" || $text=="/creator"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
❤️ این ربات توسط کانال $esmteam برای راحتی شما در دریافت و اشتراک گذاری سورس ها درست شده است .

لطفا ما رو با معرفی به دوستان خود حمایت کنید
💛 #از_حمایت_شما_سپاسگذاریم

",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>"مدیر $esmteam",'url'=>"http://telegram.me/$idposh"]],
    ],'resize_keyboard'=>true])
]);
//---------------------------------
}
elseif($text=="خرید سکه|💵|" || $text=="/coinshop"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🎗 خرید سکه 🎗
📖 تعرفه خرید سکه در ربات $esmbot به شرح زیر میباشد :

💎 2100 سکه : 2000 تومان
💎 5100 سکه : 5000 تومان
💎 11000 سکه : 10000 تومان
💎 16000 سکه : 15000 تومان

⚜️ جهت خرید سکه از دکمه های شیشه ای زیر استفاده کنید .
با کلیک بر روی هرکدام از لینک های زیر وارد درگاه پرداخت میشوید و با تایید پرداخت به آیدی ادمین مراجعه کرده و سکه خود را دریافت نمایید .
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
    [['text'=>"خرید 2000 سکه",'url'=>"https://t.me/$idposh"],['text'=>"خرید 5000 سکه",'url'=>"https://t.me/$idposh"]],
    [['text'=>"خرید 10000 سکه",'url'=>"https://t.me/$idposh"],['text'=>"خرید 15000 سکه",'url'=>"https://t.me/$idposh"]],

    ],'resize_keyboard'=>true])
]);
//----------------------------------
}
elseif($text=="پشتیبانی|📩|"){

    $step = "support";
    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خب دوست من😀

اینجا هر پیامی که بفرستی برای مدیر ربات ارسال میشه☺
وقتی کارت تموم شد دکمه ی زیر رو بزن👇",
 'parse_mode'=>"HTML",
    'reply_markup'=>json_encode([
           'keyboard'=>[
 [['text'=>"برگشت"]],
 ],
  "resize_keyboard"=>true,
  ])
  ]);  
}
}
elseif($onoff == "off" and $chat_id != $dev){
    bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"دوست عزیز

😴 این ربات فعلا به منظور استراحت و یا آپدیت خاموش شده است 😴
لطفا بعدا دوباره امتحان کنید

#با_تشکر_از_همکاری_شما
"

]);
}
//---------------------------------
if(($text=="/panel" || $text=="پنل") && $chat_id == $dev){
 $step = "panel of admin";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ادمین عزیز

به پنل مدیریت خوش اومدین
لطفا از دکمه های زیر برای کنترل ربات استفاده کنید 👇🏼",
'reply_markup'=>$panelbutton
]);
}elseif(($text=="/panel" || $text=="پنل") && $chat_id == $admins1){
 $step = "panel of admin";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ادمین عزیز

به پنل مدیریت خوش اومدین
لطفا از دکمه های زیر برای کنترل ربات استفاده کنید 👇🏼",
'reply_markup'=>$panelbutton1
]);

}elseif($text=="خدمات کاربران|📱|" and $chat_id == $dev){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"📍لطفا یک بخش را انتخاب کنید",
'reply_markup'=>$karbaran
]);
}elseif(($text=="/amar" || $text=="آمار ربات |🗄|") && $chat_id=="$admins"){
$num = count($mbr);
$sr = explode("××", file_get_contents("source/sources.json"));
$s = count($sr);
$memcanal = gcmc("@$idchannel",$token);
$load = sys_getloadavg();
$cgd = "$th:$ti:$ts";
$cgd2 = "$ty-$tm-$td";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"🗄 آمار ربات :

👤 آمار کاربران : $num نفر
📎تعداد سورس‌های آپلود شده : $s سورس

📍 تعداد عضو های کانال شما : $memcanal
📍پینگ سرور : $load[0]",
'reply_markup'=>json_encode(['inline_keyboard'=>[
	[['text'=>"⏰ ساعت",'callback_data'=>"turboo"],['text'=>"$fatime",'callback_data'=>"turboo"]],
	[['text'=>"📅 تاریخ",'callback_data'=>"turboo"],['text'=>"$fadate",'callback_data'=>"turboo"]],   	
    ],'resize_keyboard'=>true])
]);}
elseif($text=="اطلاعات کاربران|📄|" and $chat_id == $dev){
$step = "userall";
$num = count($mbr);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ادمین عزیز
تعداد کل کاربران ربات شما $num نفر میباشد

در هر بار فرستادن چند کاربر فرستاده بشه ؟

توجه داشته باشید که این عدد حتما به انگلیسی وارد شود ."]);
}elseif($step == "userall" and $chat_id == $dev){
$step = "none";
$text = $text+0;
if($text == 0){
	bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لطفا فقط از اعداد انگلیسی استفاده کنید."
]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"درحال پردازش و ارسال یوزرنیم ها

لطفا کمی صبر کنید . . ."
]);
$txt = "";
$io = 0;
$io2 = 0;
foreach($mbr as $u){
$io = $io+1;
$io2 = $io2+1;
$us = file_get_contents("data/$u.json");
$us = json_decode($us,true);
$un8 = $us['username'];
$uc8 = $us['coin'];
$txt = "$txt\n================\n$io2.UserName : @$un8\nId : $u\nCoin : $uc8";
if($io == "$text"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$txt"
]);
$io = 0;
$txt = "";
}
}
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$txt"
]);
$step = "done";
}
}
elseif(($text=="/forwardall" || $text=="فوروارد عمومی|📨|") && $chat_id="$admins"){
$step = "forward";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام مورد نظر خود را فوروارد کنید 🔗",
'reply_markup'=>json_encode(['keyboard'=>[[['text'=>'/panel']]],'resize_keyboard'=>true])
]);

}elseif($step=="forward"){
$step = "menu";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"درحال ارسال♋"]);
foreach($mbr as $i){
bot('forwardmessage',[
'chat_id'=>$i,
'from_chat_id'=>$chat_id,
'message_id'=>$message_id]);
}
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"پیام شما با موفقیت ارسال شد !"]);
}elseif(($text=="/sendall" || $text=="پیام عمومی|📨|") && $chat_id=="$admins"){
$step = "message";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"پیام خود را به صورت متن بفرستید✴",
'reply_markup'=>json_encode(['keyboard'=>[[['text'=>'/panel']]],'resize_keyboard'=>true])
]);
}elseif($step=="message"){
$step = "menu";
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"درحال ارسال♋"]);
foreach($mbr as $i){
bot('sendmessage',[
'chat_id'=>$i,
'text'=>$text]);
}
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"پیام شما با موفقیت ارسال شد !"]);
//------------------------------
}elseif(($text=="/add" || $text=="افزودن سکه کاربر|➕|") && $chat_id == $admins){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حالا توی خط بالایی آیدی عددی کاربر
و خط پایینیش تعداد سکه رو بفرست
تا بهش سکه اضافه کنم.😄",
'reply_markup'=>json_encode(['keyboard'=>[[['text'=>"/panel"]]],'resize_keyboard'=>true])]);
$step = "adding";
}elseif($step=="adding" && file_exists("data/".explode("\n",$text)[0].".json")){
$ch = explode("\n",$text)[0];
$cn = explode("\n",$text)[1];
$p2 = json_decode(file_get_contents("data/$ch.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$ch.json"));
};
$oldc = $p2['coin'];
$p2['coin'] = $p2['coin'] + $cn;

save("data/$ch.json", json_encode($p2));
bot('sendmessage',[
'chat_id'=>$ch,
'text'=>"خبر خوش💫💥

کاربر محترم! از طرف مدیریت '$cn' سکه به شما اضافه شد!

سکه های جدید شما : ".$p2['coin']." 💎"
]);
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"ادمین عزیز

از طرف مدیریت $cn سکه به کابر $ch اضافه شد !
ادمین اضافه کننده : $admins

سکه های قبلی کاربر : $oldc
سکه های جدید کاربر :".$p2['coin']." 💎"
]);
//------------------------------
}elseif(($text=="/rmv" || $text=="کم کردن سکه کاربر|➖|") && $chat_id == $admins){
bot('sendmessage',[
 'chat_id'=>$chat_id,
'text'=>"حالا توی خط بالایی آیدی عددی کاربر
و خط پایینیش تعداد سکه رو بفرست
تا ازش سکه کم کنم.😄",
'reply_markup'=>json_encode(['keyboard'=>[[['text'=>"/panel"]]],'resize_keyboard'=>true])]);
$step = "rmving";
}elseif($step=="rmving" && file_exists("data/".explode("\n",$text)[0].".json")){
$ch = explode("\n",$text)[0];
$cn = explode("\n",$text)[1];
$p2 = json_decode(file_get_contents("data/$ch.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$ch.json"));
};
$oldc = $p2['coin'];
$coin3 = $p2['coin'] - $cn;
$p2['coin'] = $coin3;
save("data/$ch.json", json_encode($p2));
bot('sendmessage',[
'chat_id'=>$ch,
'text'=>"خبر بد !!

کاربر محترم! از طرف مدیریت '$cn' سکه از حساب شما کم شد !

سکه های جدید شما : ".$p2['coin']." 💎"
]);
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"ادمین عزیز

از طرف مدیریت $cn سکه از کاربر $ch کم شد !
ادمین کم کننده :$admins

سکه های قبلی کاربر : $oldc
سکه های جدید کاربر :".$p2['coin']." 💎"
]);
//////+++++++++++++++++++++//////
}elseif($text=="📦 حذف سورس 📦" || $text=="/dl" && $chat_id== $admins){

bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حالا آیدی محصول را بفرست تا کارشو تموم کنم😎",
'reply_markup'=>json_encode(['keyboard'=>[[['text'=>'/panel']]],'resize_keyboard'=>true])
]);
$step = "deleting...";
}
/*elseif($delta['?delete']!="" && $chat_id== $dev){
$ss = file_get_contents("source/sources.json");
$sc = explode("××", $ss);
$id = $delta['?delete'] + 0;
if((count($sc)>$id) && $id>-1 && $delta['?delete']==$id){
$st = $sc[$id];
$sj = json_decode($st,true);
$sj['toz'] = "blocked";
$sj = json_encode($sj);
$se = str_replace($st, $sj, $ss);
save("source/sources.json", $se);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>" سورس شما با آیدی $id حذف شد!"]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"ببخشید نشد! دوباره امتحان کن!😯"]);
}*/
elseif($step == "deleting..." and $chat_id == $dev){
$id = $text ;
$ss = file_get_contents("source/sources.json");
$sc = explode("××", $ss);
if((count($sc)>$id) && $id>-1){
$st = $sc[$id];
$sj = json_decode($st,true);
$sj['toz'] = "blocked";
$sv = json_encode($sj);
$sv = "\n$sv\n";
$se = str_replace($st, $sv, $ss);
save("source/sources.json", $se);
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"ادمین عزیز 

سورس مورد نظر شما با آیدی $id با موفقیت حذف شد ."]);
}else{
	bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"خطای غیر منتظره ای رخ داده است لطفا بعدا اقدام نمایید ."]);
}
}elseif($text=="/block" || $text=="مسدود کردن کاربر|🔓|" && $chat_id == $dev){
$step = "block.i";
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"آیدیشو فقط بده😤",
'reply_markup'=>json_encode(['keyboard'=>[[['text'=>'پنل']]],'resize_keyboard'=>true]) 
]);

}elseif($delta['?block']!="" && $chat_id == $dev && file_exists("data/".$delta['?block'].".json")){

$id = $delta['?block'];

$p2 = file_get_contents("data/$id.json");
$p2 = json_decode($p2, true);
$p2['block'] = "yes";
$p2 = json_encode($p2);
save("data/$id.json", $p2);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"خب بلاک شد😀😊"]);


}elseif($delta['?unblock']!="" && $chat_id == $dev && file_exists("data/".$delta['?unblock'].".json")){

$id = $delta['?unblock'];

$p2 = file_get_contents("data/$id.json");
$p2 = json_decode($p2, true);
if($p2['block']!="yes"){
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"کاربر آزاد بود😕"]);
}else{
$p2['block'] = "no";
$p2 = json_encode($p2);
save("data/$id.json", $p2);
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"کاربر آزاد شد😃"]);
}
//"""""""""""""""'"""""""""""""""""//
/////////////////////////////////
}elseif($delta['?+coin']!="" && $chat_id== $admins && file_exists("data/".$delta['id'].".json")){
$cn = $delta['?+coin'];
$ch = $delta['id'];
$p2 = json_decode(file_get_contents("data/$ch.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$ch.json"));
};
$p2['coin'] = $p2['coin'] + $cn;
save("data/$ch.json", json_encode($p2));
bot('sendmessage',[
'chat_id'=>$ch,
'text'=>"خبر خوش💫💥

کاربر محترم! از طرف مدیریت '$cn' سکه به شما اضافه شد!

سکه های جدید شما : ".$p2['coin']." 💎"
]);
bot('sendmessage',[
'text'=>"عملیات انجام شد✔",
'chat_id'=>"$admins"]);
//------------------------------
}elseif($delta['?-coin']!="" && $chat_id== $admins && file_exists("data/".$delta['id'].".json")){
$cn = $delta['?-coin'];
$u = $delta['id'];
$p2 = json_decode(file_get_contents("data/$u.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$u.json"));
};
$p2['coin'] = $p2['coin'] - $cn;
save("data/$u.json", json_encode($p2));
bot('sendmessage',[
'chat_id'=>$ch,
'text'=>"خبر بد💫💥

کاربر محترم! از طرف مدیریت '$cn' سکه از شما کم شد!

سکه های جدید شما : ".$p2['coin']." 💎"
]);
bot('sendmessage',[
'text'=>"عملیات انجام شد✔",
'chat_id'=>"$admins"]);
//=========================================//
}elseif(explode("_",$text)[0] == "rmv" and $chat_id == $dev){
$id1 = explode("_",$text)[1];
$c1 = explode("_",$text)[2];
$p2 = json_decode(file_get_contents("data/$id1.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$id1.json"));
};
$coin2 = $p2['coin'];
$coin2 = $coin2-$c1;
$p2['coin'] = $coin2;
save("data/$id1.json", json_encode($p2));
if($id1 == "116969885"){
    $coin = $coin2;
}
bot('sendmessage',[
'chat_id'=>$id1,
'text'=>"خبر بد!!

کاربر محترم! از طرف مدیریت '$c1' سکه از شما کم شد!

سکه های جدید شما : ".$p2['coin']." 💎"
]);
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"انجام شد

 های جدید کاربر :".$p2['coin']." 💎"
]);
///======================================//
}elseif(explode("_",$text)[0] == "rmvkhaf" and $chat_id == $dev){
$id1 = explode("_",$text)[1];
$c1 = explode("_",$text)[2];
$p2 = json_decode(file_get_contents("data/$id1.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$id1.json"));
};
$coin2 = $p2['coin'];
$coin2 = $coin2-$c1;
$p2['coin'] = $coin2;
if($id1 == "116969885"){
    $coin = $coin2;
}
save("data/$id1.json", json_encode($p2));
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"ادمین عزیز
سکه های کاربر با موفقیت کاهش یافت .
سکه های جدید کاربر : ".$p2['coin']." 💎"
]);
///======================================//
}elseif(explode("_",$text)[0] == "add" and $chat_id == $dev){
$id1 = explode("_",$text)[1];
$c1 = explode("_",$text)[2];
$p2 = json_decode(file_get_contents("data/$id1.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$id1.json"));
};
$coin2 = $p2['coin'];
$coin2 = $coin2+$c1;
$p2['coin'] = $coin2;
save("data/$id1.json", json_encode($p2));
if($id1 == "116969885"){
    $coin = $coin2;
}
bot('sendmessage',[
'chat_id'=>$id1,
'text'=>"خبر خوش💫💥

کاربر محترم! از طرف مدیریت '$c1' سکه به شما اضافه شد!

سکه های جدید شما : ".$p2['coin']." 💎"
]);
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"ادمین عزیز
سکه های کاربر با موفقیت افزایش یافت .
سکه های جدید کاربر : ".$p2['coin']." 💎"
]);
//==================================//
}elseif($text == "ربات خاموش شود|🌑|" and $chat_id == $admins){
    
save("onoff.txt","off");
$onoff1 = file_get_contents("onoff.txt");
if($onoff1 == "on"){
    $onoffg = "ربات خاموش شود|🌑|";
}
elseif($onoff1 == "off"){
    $onoffg = "ربات روشن شود|🌕|";
}
bot('sendmessage',[
    'chat_id'=>$admins,
    'text'=>"با موفقیت خاموش شد",
    'reply_markup'=>$panelbutton]);
//==================================//
}elseif($text == "ربات روشن شود|🌕|" and $chat_id == $admins){
save("onoff.txt","on");
$onoff1 = file_get_contents("onoff.txt");
if($onoff1 == "on"){
    $onoffg = "ربات خاموش شود|🌑|";
}
elseif($onoff1 == "off"){
    $onoffg = "ربات روشن شود|🌕|";
}
bot('sendmessage',[
    'chat_id'=>$admins,
    'text'=>"با موفقیت روشن شد",'reply_markup'=>$panelbutton
]);
}
//==========================//
elseif($text == "ساخت کد هدیه|⚒|" and $chat_id == $dev){
	$rnd1 = rand(100000,999999);
	$rnd2 = rand(3,10);
    $step = "giftcode";
        $lk1 = $rnd1;
        $lk2 = $rnd2;
    save("gift/$lk1.txt","$lk2");
        save("gift/base.txt","$lk1\n$lk2");
        $cgd = "$ty/$tm/$td";
      save("gift/time.txt","$cgd");
        bot('sendmessage',[
'chat_id'=>$channel,
'text'=>"
🎁 کد هدیه جدید 

• کد هدیه : $lk1
• تعداد سکه هدیه : $lk2

⚡️ زود برید به ربات و در قسمت کد هدیه ، کدی که در بالا هست رو وارد کنید و سکه بگیرید ☺️

💥 عجله کنید تا بقیه استفاده نکردن 💥",

'reply_markup'=>json_encode([ 'inline_keyboard'=>[
[['text'=>"💥ورود به ربات 💥",'url'=>"https://t.me/$botuser"]]
]])
]);
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"
🔹 کد هدیه با موفقیت به کانال ارسال شد

🔸 مشخصات : 

• کد هدیه : $lk1
• تعداد سکه هدیه : $lk2
"
]);
}elseif(date("H") == "22" and date("i") == "00"){
	if($giftstep == "start"){
	$cgd2 = "$ty/$tm/$td";
	$cgd = file_get_contents("gift/time.txt");
	if($cgd2 == $cgd){
	$rnd1 = rand(100000,999999);
	$rnd2 = rand(3,10);
    $step = "giftcode";
        $lk1 = $rnd1;
        $lk2 = $rnd2;
    save("gift/$lk1.txt","$lk2");
        save("gift/base.txt","$lk1\n$lk2");
        $cgd = "$ty/$tm/$td";
      save("gift/time.txt","$cgd");
        bot('sendmessage',[
'chat_id'=>$channel,
'text'=>"
🍀 کد هدیه جدید 🍀

• کد هدیه : $lk1
• تعداد سکه هدیه : $lk2

🔹 زود برید به ربات و در قسمت کد هدیه ، کدی که در بالا هست رو وارد کنید و سکه بگیرید ☺

🔸 عجله کنید تا بقیه استفاده نکردن 😕
",

'reply_markup'=>json_encode([ 'inline_keyboard'=>[
[['text'=>"💥ورود به ربات 💥",'url'=>"https://t.me/$botuser"]]
]])
]);
bot('sendmessage',[
'chat_id'=>$Dev,
'text'=>"
🔹 کد هدیه با موفقیت به کانال ارسال شد

🔸 مشخصات : 

• کد هدیه : $lk1
• تعداد سکه هدیه : $lk2


"
]);
}
}
 }elseif ($text == "آپدیت ربات |🆕|" or $text == "/update"){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 0 %
◻️◻️◻️◻️◻️◻️◻️◻️◻️◻️'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 10 %
◼️◻️◻️◻️◻️◻️◻️◻️◻️◻️'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 20 %
◼️◼️◻️◻️◻️◻️◻️◻️◻️◻️'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 30 %
◼️◼️◼️◻️◻️◻️◻️◻️◻️◻️
 ']);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 40 %
◼️◼️◼️◼️◻️◻️◻️◻️◻️◻️
 ']);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 50 %
◼️◼️◼️◼️◼️◻️◻️◻️◻️◻️'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 60 %
◼️◼️◼️◼️◼️◼️◻️◻️◻️◻️'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 70 %
◼️◼️◼️◼️◼️◼️◼️◻️◻️◻️'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 80 %
◼️◼️◼️◼️◼️◼️◼️◼️◻️◻️'
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 90 %
◼️◼️◼️◼️◼️◼️◼️◼️◼️◻️'
 ]);
 sleep(1.5);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات در حال آپدیت میباشد لطفا از فرستادن هرگونه پیام دیگر خودداری فرمایید .

پیشرفت : 100 %
◼️◼️◼️◼️◼️◼️◼️◼️◼️◼️◼️'
 ]);
 sleep(0.5);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'آپدیت ربات |🆕|

✅ ربات آپدیت شد .
#با_تشکر_از_همکاری_و_حمایت_شما

🔺 برای اعمال تغییرات و بازگشت به صفحه اصلی برروی /start کلیک کنید .
'
 ]);
 }
elseif($text == "فعال کردن آپدیت ربات|✅|" and $chat_id == $dev){
save("upmenu.txt","off");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'عملیات موفق
 ادمین عزیز
 دکمه آپدیت با موفقیت از منوی اصلی ربات حذف شد'
 ]);
}
elseif($text == "فعال کردن آپدیت ربات|✅|" and $chat_id == $dev){
save("upmenu.txt","on");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'عملیات موفق
 ادمین عزیز
 دکمه آپدیت با موفقیت به منوی اصلی ربات افزوده شد'
 ]);
}elseif($text == "🕗 زمانبندی اجرا 🕗" and $chat_id == $dev){
	$step = "timer";
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"
 ▪️ ادمین عزیز
 🔸 لطفا تاریخ و زمانی را که میخواهید ربات در آن زمان text را به کانال ارسال کند را وارد کنید :

💡 مثال : 
💡 0/17:10/text

🦠 در مثال بالا ربات عملیات را در همان روز و در ساعت 17:10 انجام میدهد .
 "
 ]);
}elseif($step == "timer" and $chat_id == $dev){
    $tstep == "starttimer";
	$tdate = explode("/",$text);
	$dateamaliat = $tdate[0];
	$dateamaliat = $td+$dateamaliat;
	$timeamaliat = $tdate[1];
	$textamaliat = $tdate[2];
	$iamal = explode(":",$timeamaliat)[1];
	$hamal = explode(":",$timeamaliat)[0];
	mkdir("time");
	save("time/base.txt","$dateamaliat\n$timeamaliat\n$textamaliat");
bot('sendMessage',[
 'chat_id'=>$dev,
 'text'=>"
 ✅ عملیات با موفقیت ذخیره شد .
📕 توضیحات :

📆 زمان اجرا : $ty-$tm-$dateamaliat ( $tdate[0] روز دیگر )
🕗 ساعت اجرا : $timeamaliat
📄 متن : 

$textamaliat
 "
 ]);

}elseif($th == $hamal and $ti == $iamal and $td == $dateamaliat){
$tstep == "stoptimer";
$ama = file_get_contents("time/base.txt");
$dateamaliat = explode("\n",$ama)[0];
$timeamaliat = explode("\n",$ama)[1];
$textamaliat = str_replace("$dateamaliat\n$timeamaliat\n","",$ama);
bot('sendMessage',[
 'chat_id'=>$dev,
 'text'=>"$textamaliat"
 ]);
 bot('sendMessage',[
 'chat_id'=>$dev,
 'text'=>"$textamaliat
 
 با موفقیت در ساعت $timeamaliat ارسال شد ✔"
 ]);
 unlink("time/base.txt");
//=========================================================//
}elseif(explode("-",$step)[0] == "goza" and $text == "❌ ارسال گزارش ❌"){
	mkdir("goza");
	$io = file_get_contents("goza/adad.txt");
	$io = $io+1;
	save("goza/adad.txt",$io);
$n = explode("-",$step)[1];
$all = explode("××", file_get_contents("source/sources.json"));
$f = json_decode($all[$n]);
$gh = $f->money;
$u = $f->userid;
$fi = $f->file_id;
$fn = $f->file_name;
$fn = str_replace(explode(".",$fn)[0],"$esmfile",$fn);
$tz = $f->toz;
$tz = str_replace("@".explode("@",$tz)[1],"",$tz);
$us = file_get_contents("data/$chat_id.json");
$us = json_decode($us,true);
$uc8 = $us['coin'];
$fo = json_decode(file_get_contents("https://api.telegram.org/bot'.API_KEY.'/getChatMember?chat_id=@$idchannel&user_id=$chat_id"));
$uf8 = $fo->result->user->first_name;
$un8 = $fo->result->user->username;
$s = ['userid'=>$chat_id, 'money'=>$gh, 'fileid'=>$n];
$s =  json_encode($s);
save("goza/$io.json",$s);
$ss = file_get_contents("goza/base.json");
$ei = "$ss\n××\n$s";
save("goza/base.json",$ei);
$io = gozabaste($io);
bot('sendmessage',[
            'chat_id' => $chat_id,
            'text'=>"❌ گزارش شما با موفقیت ثبت شد
			
			ادمین بررسی گزارش ما این گزارش را در اسرع وقت بررسی میکند .
			
اگر گزارش شما مبنی بر باگ دار بودن سورس درست باشد شما سکه های خود را پس میگیرید و در غیر اینصورت به تعداد نصف قیمت این سورس از حساب شما سکه کم میشود .
			",
			'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
[['text'=>"برگشت"]]
]])
]);
		sendfile($fi, $fn, $gozaad, "توضیحات سورس : $tz");
        bot('sendmessage',[
            'chat_id'=>$gozaad,
            'text'=>"
⚠ گزارش جدیدی ثبت شده:

• فرد درخواست کننده: $uf8
• ایدی عددی فرد: $chat_id
• یوزرنیم فرد: @$un8
• تعداد سکه های سورس : $gh

- فایل سورس گزارش شده در بالا ارسال شده است 👆🏻

گزارش درست است : /yes_".$io."
گزارش نادرست است : /no_".$io
]);
		sendfile($fi, $fn, $dev, "توضیحات سورس : $tz");
        bot('sendmessage',[
            'chat_id'=>$dev,
            'text'=>"
⚠ گزارش جدیدی ثبت شده:

• فرد درخواست کننده: $uf8
• ایدی عددی فرد: $chat_id
• یوزرنیم فرد: @$un8
• تعداد سکه های سورس : $gh

- فایل سورس گزارش شده در بالا ارسال شده است 👆🏻
"
]);
}elseif(explode("_",$text)[0] == "/yes" and $chat_id == $gozaad){
$io = gozabaz(explode("_",$text)[1]);
$ss1 = json_decode(file_get_contents("goza/$io.json"),true);
$id = $ss1['fileid'];
$ss = file_get_contents("source/sources.json");
$sc = explode("××", $ss);
if((count($sc)>$id) && $id>-1){
$st = $sc[$id];
$sj = json_decode($st,true);
$sj['toz'] = "blocked";
$sv = json_encode($sj);
$sv = "\n$sv\n";
$se = str_replace($st, $sv, $ss);
save("source/sources.json", $se);
bot('sendmessage',[
'chat_id'=>$gozaad,
'text'=>"سورس گزارش شده با آیدی $id با موفقیت حذف شد ."]);
}
//===========================//
//$s = ['userid'=>$chat_id, 'money'=>$gh, 'fileid'=>$n];//
//=============================//
$chat_id2 = $ss1['userid'];
$all = explode("××", file_get_contents("source/sources.json"));
$f = json_decode($all[$id]);
$gh = $ss1['money'];
$u = $f->userid;
$p2 = json_decode(file_get_contents("data/$chat_id2.json"),true);
if($p2=="null" || $p2==null){
$p2 = json_decode(file_get_contents("data/$chat_id2.json"));
};
$p2coinold = $p2['coin'];
$p2['coin'] = $p2['coin']+$gh;
$p2coinnew = $p2['coin'];
save("data/$chat_id2.json", json_encode($p2));
$p3 = json_decode(file_get_contents("data/$u.json"),true);
if($p3=="null" || $p3==null){
$p3 = json_decode(file_get_contents("data/$u.json"));
};
$p3coinold = $p3['coin'];
$p3['coin'] = $p3['coin']-$gh;
$p3coinnew = $p3['coin'];
save("data/$u.json", json_encode($p3));
$gh2 = $gh*$xxx;
  bot('sendmessage',[
'chat_id'=>$chat_id2,
'text'=>"▪️ کاربر عزیز گزارش شما مبنی بر باگ دار بودن سورس خریداری شده توسط شما درست بود و توسط ادمین گزارشات ما تائید شده است . 🙁

🙇🏻‍♂️ پوزش ما را به خاطر سورس باگ دار بپذیرید . 🙇🏻‍♂️
😞 شما $gh سکه بابت این سورس پرداخت کرده بودید .

🤗 اکنون $gh سکتون رو دریافت کردید 🎁
سکه های جدید شما : ".$p2['coin']." 💎

✅ #با_تشکر_از_همکاری_شما
"
]);

  bot('sendmessage',[
'chat_id'=>$u,
'text'=>"▪️ کاربر عزیز یک گزارش مبنی بر باگ دار بودن سورس شما به ادمین گزارشات ربات $esmbot فرستاده شده بود که توسط ادمین گزارشات تائید شد .

😅 شما $gh2 سکه بابت هر خرید این سورس توسط کاربران دریافت میکردید .

😔 اکنون $gh سکه از شما به خاطر سورس باگ دار کم شد .
سکه های جدید شما : ".$p3['coin']." 💎

🔺 اگر اعتراضی نسبت به این تصمیم دارید در بخش پشتیبانی ربات مطرح کنید 🔺
"
]);
  bot('sendmessage',[
'chat_id'=>$gozaad,
'text'=>"✅ عملیات با موفقیت انجام شد .

👤 کاربر $u که سورس را ارسال کرده بود $p3coinold سکه داشت که به $p3coinnew سکه کاهش یافت .

👤 کاربر $chat_id2 نیز که سورس را خریده بود $p2coinold سکه داشت که به $p2coinnew سکه افزایش یافت .

🔺 از شما ادمین عزیز به خاطر بررسی این شکایت سپاسگذاریم .
"
]);
  bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"✅ عملیات با موفقیت انجام شد .

👤 کاربر $u که سورس را ارسال کرده بود $p3coinold سکه داشت که به $p3coinnew سکه کاهش یافت .

👤 کاربر $chat_id2 نیز که سورس را خریده بود $p2coinold سکه داشت که به $p2coinnew سکه افزایش یافت .

🔺 از شما ادمین عزیز به خاطر بررسی این شکایت سپاسگذاریم .
"
]);
unlink("goza/$io.json");
}elseif(explode("_",$text)[0] == "/no" and $chat_id == $gozaad){
$io = gozabaz(explode("_",$text)[1]);
$ss1 = json_decode(file_get_contents("goza/$io.json"),true);
	//$s = ['userid'=>$chat_id, 'money'=>$gh, 'fileid'=>$n];//
$n = $ss1['fileid'];
$chat_id2 = $ss1['userid'];
$all = explode("××", file_get_contents("source/sources.json"));
$f = json_decode($all[$n]);
$gh = $f->money;
	$p3 = json_decode(file_get_contents("data/$chat_id2.json"),true);
if($p3=="null" || $p3==null){
$p3 = json_decode(file_get_contents("data/$chat_id2.json"));
}
$gh2 = $gh*$xxx;
$p3coinold = $p3['coin'];
$p3['coin'] = $p3['coin']-$gh2;
$p3coinnew = $p3['coin'];
save("data/$chat_id2.json", json_encode($p3));
  bot('sendmessage',[
'chat_id'=>$chat_id2,
'text'=>"▪️ کاربر عزیز گزارش شما مبنی بر باگ دار بودن سورس خریداری شده توسط شما توسط ادمین گزارشات ربات $esmbot بررسی شد و متاسفانه باگی در سورس یافت نشده است . 😔

☹️  اکنون $gh2 سکه از شما به خاطر گزارش غلط کم شد . 😢

سکه های جدید شما : ".$p3['coin']." 💎

🔺 اگر اعتراضی نسبت به این تصمیم دارید در بخش پشتیبانی ربات مطرح کنید 🔺
"
]);
  bot('sendmessage',[
'chat_id'=>$gozaad,
'text'=>"✅ عملیات با موفقیت انجام شد .

👤 کاربر $chat_id2 که سورس را گزارش کرده بود $p3coinold سکه داشت که به $p3coinnew سکه کاهش یافت .

🔺 از شما ادمین عزیز به خاطر بررسی این شکایت سپاسگذاریم .
"
]);
bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"✅ عملیات با موفقیت انجام شد .

👤 کاربر $chat_id2 که سورس را گزارش کرده بود $p3coinold سکه داشت که به $p3coinnew سکه کاهش یافت .

🔺 از شما ادمین عزیز به خاطر بررسی این شکایت سپاسگذاریم .

"
]);
unlink("goza/$io.json");
}elseif($text == "🧿 Txt to json 🧿" and $chat_id == $dev){
    $ss1 = file_get_contents("ee.txt");
    save("source/sources.json",$ss1);
  bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"✅ عملیات با موفقیت انجام شد ."
]);
}elseif($text == "🧿 Json to txt 🧿" and $chat_id == $dev){
    $ss1 = file_get_contents("source/sources.json");
    save("ee.txt",$ss1);
  bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"✅ عملیات با موفقیت انجام شد ."
]);
//======================================//
}elseif($text=="📋 نمایش سورس 📋" and $chat_id == $dev){
	$step = "showa";
	  bot('sendmessage',[
'chat_id'=>$dev,
'text'=>"خب آیدی سورس مورد نظرتون رو بفرستید ."
]);
}elseif($step=="showa" and $chat_id == $dev){
$all = explode("××",file_get_contents("source/sources.json"));
$get = $all[$text];
$f = json_decode($get);
$u = $f->username;
$fi = $f->file_id;
tavisid($fi);
$fn = $f->file_name;
$fn = str_replace(explode(".",$fn)[0],"$esmfile",$fn);
$gh0 = $f->money;
$tozi = $f->toz;
$tozi = str_replace("@".explode("@",$tozi)[1],"",$tozi);
$step = "source-$text";
sendfile($fi, $fn, $dev, "");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
📋 اطلاعات سورس 📋

توضیحات : 
$tozi
💰 قیمت : $gh0 سکه
📖 آیدی سورس : $text

",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"خرید|💵|"]],
[['text'=>"پنل"]],
[['text'=>"برگشت"]]
]])
]);
}elseif($text=="پیام به کاربر|📨|" and $chat_id == $dev){
	$step = "sendmessageto1";
		bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"▪️ ادمین عزیز

♦️ لطفا در خط اول آیدی عددی کاربر مورد نظر و در خط های بعدی پیام مورد نظر خود را وارد و ارسال کنید .",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"پنل"]],
[['text'=>"برگشت"]]
]])
]);
}elseif($step == "sendmessageto1" and $chat_id == $dev){
	$chatid2 = explode("\n",$text)[0];
	$txt = str_replace("$chatid2\n","",$text);
	bot('sendmessage',[
'chat_id'=>$chatid2,
'text'=>"▪️ دوست عزیز
🔺 شما یک پیام جدید از طرف پشتیبانی ربات دریافت کردید .

⚜️ متن پیام : $txt",
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[['text'=>"پنل"]],
[['text'=>"برگشت"]]
]])
]);
}
$usr = $message->from->username;
$profile['username'] = $usr;
$profile['step'] = $step;
$profile['coin'] = $coin;
save("data/$chat_id.json", json_encode($profile));
echo "finished.";
unlink("error_log");

?>
