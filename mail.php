<?$n_page=8;
require "include/header.php";
?>
<!--start content-->
		<div class="content">
			<div class="page">
				<div class="wrapper">
				<?$title_mail="�������� ���������"?>
					<h1><?=$title_mail?></h1> 
					
					<p>
					<?
    // ��������� ����� ����� 
    $message_text = htmlspecialchars(trim($_POST['message_text']));  
    $name = htmlspecialchars(trim($_POST['name'])); 
	$email = htmlspecialchars(trim($_POST['email'])); 
     
    // ��������� ����� ���������, ��� �� ������ ��������� $len ������ 
    $len = 200; 
   
	if(strlen($message_text) > $len) 
    { 
        echo "������. ��������� �� ������ ��������� ".$len. " ������"; 
    } 
     
    // ����� ���� �������� email ���� ���������� ��������� 
    $to = "pavlov150@outlook.com"; 
    $subject="��������� � ����� ��������� �� ������������ ".$name; 
     
    // ������������ �� windows-1251 � koi8-r 
    $subject = convert_cyr_string($subject,'w','k'); 
     
    // ��� ���� ������ 
    $message ="<html> 
               <head></head> 
               <body> 
               <b>�� ������������:</b> ".$name."<br>
			   <b>��. ����� ������������:</b> ".$email."<br>
               <b>����� ���������:</b> ". $message_text." <br>
			   <b>��������� ����������:</b> ".date("d.m.Y H:i:s"). "<br> 
               </body> 
               </html> 
               "; 
    // ������������ �� windows-1251 � koi8-r            
    $message = convert_cyr_string($message,'w','k'); 
    // ��������� ������ 
    $headers = "Content-Type: text/html; charset=KOI8-R\r\n"; 
    // �� ���� ������ 
    $headers .= "From: DIGITAL-BLAG.RU <digital-blag.ru>\r\n\r\n"; 

	if ($name=="" or $email=="" or $message_text=="") {
	echo "��������� �� ����������. ��������� ��� ���� �����";
	}
	else {
    if(mail($to,$subject,$message,$headers,$email))
    { 
      echo "���� ��������� ������� ����������!";  
    } 
    else 
    {
      echo "������. ��������� �� ����������. ��������� ��������� �� ����";     
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
