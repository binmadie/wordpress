<?PHP
//Kiểm tra thiết bị
$iPod    = stripos($_SERVER['HTTP_USER_AGENT'],"iPod");
$iPhone  = stripos($_SERVER['HTTP_USER_AGENT'],"iPhone");
$iPad    = stripos($_SERVER['HTTP_USER_AGENT'],"iPad");
$Android = stripos($_SERVER['HTTP_USER_AGENT'],"Android");
$webOS   = stripos($_SERVER['HTTP_USER_AGENT'],"webOS");

//Bắt đầu detect
if( $iPod || $iPhone || $iPad){
  //nếu là các thiết bị cầm tay chạy IOS nó sẽ mở ứng dụng trên App Store
  header( 'Location: https://apps.apple.com/VN/app/idxxxxxxxxx?mt=8' );
  die();
 // echo "iphone";
  
}
else if($Android){
    //nếu là các thiết bị cầm tay chạy Android nó sẽ mở ứng dụng trên CH PLAY
  //echo "android";
  header( 'Location: play.google.com/store/apps/details?id=xxx' );
  die();
}
else
{
   // Nếu không phải 2 thiết bị trên nó ra link này :D
  header( 'Location: https://www.google.com/' );
  die();
}
?>
