<?$n_page=8;
require "include/header.php";
?>
<!--start content-->
		<div class="content">
			<div class="page">
				<div class="wrapper">
				<?$title_mail="Отправка сообщения"?>
					<h1><?=$title_mail?></h1> 
					
					<p>
					<?
    // Обработка полей формы 
    $message_text = htmlspecialchars(trim($_POST['message_text']));  
    $name = htmlspecialchars(trim($_POST['name'])); 
	$email = htmlspecialchars(trim($_POST['email'])); 
     
    // Проверяем длину сообщения, она не должна превышать $len знаков 
    $len = 200; 
   
	if(strlen($message_text) > $len) 
    { 
        echo "Ошибка. Сообщение не должно превышать ".$len. " знаков"; 
    } 
     
    // здесь надо вставить email куда отправлять сообщение 
    $to = "pavlov150@outlook.com"; 
    $subject="Сообщение с сайта ОЦИФРОВКА от пользователя ".$name; 
     
    // конвертируем из windows-1251 в koi8-r 
    $subject = convert_cyr_string($subject,'w','k'); 
     
    // это само письмо 
    $message ="<html> 
               <head></head> 
               <body> 
               <b>От пользователя:</b> ".$name."<br>
			   <b>Эл. адрес пользователя:</b> ".$email."<br>
               <b>Текст сообщения:</b> ". $message_text." <br>
			   <b>Сообщение отправлено:</b> ".date("d.m.Y H:i:s"). "<br> 
               </body> 
               </html> 
               "; 
    // конвертируем из windows-1251 в koi8-r            
    $message = convert_cyr_string($message,'w','k'); 
    // заголовки письма 
    $headers = "Content-Type: text/html; charset=KOI8-R\r\n"; 
    // от кого письмо 
    $headers .= "From: DIGITAL-BLAG.RU <digital-blag.ru>\r\n\r\n"; 

	if ($name=="" or $email=="" or $message_text=="") {
	echo "Сообщение не отправлено. Заполните все поля формы";
	}
	else {
    if(mail($to,$subject,$message,$headers,$email))
    { 
      echo "Ваше сообщение успешно отправлено!";  
    } 
    else 
    {
      echo "Ошибка. Сообщение не отправлено. Проверьте заполнены ли поля";     
    } 
}
?></p>

				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
					<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				<br />
				
				</div>
			</div>
			
		</div>
<!--end content-->
</div>
<!--end main-->
<?require "include/footer.php";?>
