<?header('content-type: image/jpeg'); 

// �������� ��� ����������� ����� GET
$image = $_GET['image']; 

// ������ ������� ����
$watermark = imagecreatefrompng('watermark.png');   

// �������� �������� ������ � ������ �������� �����
$watermark_width = imagesx($watermark);
$watermark_height = imagesy($watermark);  

// ������ jpg �� ������������� �����������
$image_path = $image;
$image = imagecreatefromjpeg($image_path);
//���� ���-�� ����� �� ���
if ($image === false) {
    return false;
}
$size = getimagesize($image_path);
// �������� ������� ���� �� �����������
$dest_x = $size[0] - $watermark_width - 5;
$dest_y = $size[1] - $watermark_height - 5;

imagealphablending($image, true);
imagealphablending($watermark, true);
// ������ ����� �����������
imagecopy($image, $watermark, $dest_x, $dest_y, 0, 0, $watermark_width, $watermark_height);
imagejpeg($image, NULL, 80);
// ����������� ������
imagedestroy($image);
imagedestroy($watermark); ?>
