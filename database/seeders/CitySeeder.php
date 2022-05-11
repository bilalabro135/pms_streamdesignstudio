<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitySeeder extends Seeder
{
    
    public function run()
    {
        $cities = [
            'Karachi', 
            'Lahore', 
            'Faisalabad', 
            'Rawalpindi', 
            'Gujranwala', 
            'Peshawar', 
            'Multan', 
            'Saidu Sharif', 
            'Hyderabad City', 
            'Islamabad', 
            'Quetta', 
            'Bahawalpur', 
            'Sargodha', 
            'Sialkot City', 
            'Sukkur', 
            'Larkana', 
            'Chiniot', 
            'Shekhupura', 
            'Jhang City', 
            'Dera Ghazi Khan', 
            'Gujrat', 
            'Rahimyar Khan', 
            'Kasur', 
            'Mardan', 
            'Mingaora', 
            'Nawabshah', 
            'Sahiwal', 
            'Mirpur Khas', 
            'Okara', 
            'Mandi Burewala', 
            'Jacobabad', 
            'Saddiqabad', 
            'Kohat', 
            'Muridke', 
            'Muzaffargarh', 
            'Khanpur', 
            'Gojra', 
            'Mandi Bahauddin', 
            'Abbottabad', 
            'Turbat', 
            'Dadu', 
            'Bahawalnagar', 
            'Khuzdar', 
            'Pakpattan', 
            'Tando Allahyar', 
            'Ahmadpur East', 
            'Vihari', 
            'Jaranwala', 
            'New Mirpur', 
            'Kamalia', 
            'Kot Addu', 
            'Nowshera', 
            'Swabi', 
            'Khushab', 
            'Dera Ismail Khan', 
            'Chaman', 
            'Charsadda', 
            'Kandhkot', 
            'Chishtian', 
            'Hasilpur', 
            'Attock Khurd', 
            'Muzaffarabad', 
            'Mianwali', 
            'Jalalpur Jattan', 
            'Bhakkar', 
            'Zhob', 
            'Dipalpur', 
            'Kharian', 
            'Mian Channun', 
            'Bhalwal', 
            'Jamshoro', 
            'Pattoki', 
            'Harunabad', 
            'Kahror Pakka', 
            'Toba Tek Singh', 
            'Samundri', 
            'Shakargarh', 
            'Sambrial', 
            'Shujaabad', 
            'Hujra Shah Muqim', 
            'Kabirwala', 
            'Mansehra', 
            'Lala Musa', 
            'Chunian', 
            'Nankana Sahib', 
            'Bannu', 
            'Pasrur', 
            'Timargara', 
            'Parachinar', 
            'Chenab Nagar', 
            'Gwadar', 
            'Abdul Hakim', 
            'Hassan Abdal', 
            'Tank', 
            'Hangu', 
            'Risalpur Cantonment', 
            'Karak', 
            'Kundian', 
            'Umarkot', 
            'Chitral', 
            'Dainyor', 
            'Kulachi', 
            'Kalat', 
            'Kotli', 
            'Gilgit', 
            'Narowal', 
            'Khairpur Mirs', 
            'Khanewal', 
            'Jhelum', 
            'Haripur', 
            'Shikarpur', 
            'Rawala Kot', 
            'Hafizabad', 
            'Lodhran', 
            'Malakand', 
            'Attock City', 
            'Batgram', 
            'Matiari', 
            'Ghotki', 
            'Naushahro Firoz', 
            'Alpurai', 
            'Bagh', 
            'Daggar', 
            'Leiah', 
            'Tando Muhammad Khan', 
            'Chakwal', 
            'Badin', 
            'Lakki', 
            'Rajanpur', 
            'Dera Allahyar', 
            'Shahdad Kot', 
            'Pishin', 
            'Sanghar', 
            'Upper Dir', 
            'Thatta', 
            'Dera Murad Jamali', 
            'Kohlu', 
            'Mastung', 
            'Dasu', 
            'Athmuqam', 
            'Loralai', 
            'Barkhan', 
            'Musa Khel Bazar', 
            'Ziarat', 
            'Gandava', 
            'Sibi', 
            'Dera Bugti', 
            'Eidgah', 
            'Uthal', 
            'Chilas', 
            'Panjgur', 
            'Gakuch', 
            'Qila Saifullah', 
            'Kharan', 
            'Aliabad', 
            'Awaran', 
            'Dalbandin'
        ];

        $provinces = [
            1,
            2, 
            2, 
            2, 
            2, 
            3, 
            2, 
            3, 
            1, 
            2, 
            4, 
            2, 
            2, 
            2, 
            1, 
            1, 
            2, 
            2, 
            2, 
            2, 
            2, 
            2, 
            2, 
            3, 
            3, 
            1, 
            2, 
            1, 
            2, 
            2, 
            1, 
            2, 
            3, 
            2, 
            2, 
            2, 
            2, 
            2, 
            3, 
            4, 
            1, 
            2, 
            4, 
            2, 
            1, 
            2, 
            2, 
            2, 
            6, 
            2, 
            2, 
            3, 
            3, 
            2, 
            3, 
            4, 
            3, 
            1, 
            2, 
            2, 
            2, 
            6, 
            2, 
            2, 
            2, 
            4, 
            2, 
            2, 
            2, 
            2, 
            1, 
            2, 
            2, 
            2, 
            2, 
            2, 
            2, 
            2, 
            2, 
            2, 
            2, 
            3, 
            2, 
            2, 
            2, 
            3, 
            2, 
            3, 
            3, 
            2, 
            4, 
            2, 
            2, 
            3, 
            3, 
            3, 
            3, 
            2, 
            1, 
            3, 
            5, 
            3, 
            4, 
            6, 
            5, 
            2, 
            1, 
            2, 
            2, 
            3, 
            1, 
            6, 
            2, 
            2, 
            3, 
            2, 
            3, 
            1, 
            1, 
            1, 
            3, 
            6, 
            3, 
            2, 
            1, 
            2, 
            1, 
            3, 
            2, 
            4, 
            1, 
            4, 
            1, 
            3, 
            1, 
            4, 
            4, 
            4, 
            3, 
            6, 
            4, 
            4, 
            4, 
            4, 
            4, 
            4, 
            4, 
            3, 
            4, 
            5, 
            4, 
            5, 
            4, 
            4, 
            5, 
            4, 
            4
        ];

        $lats = [
            '24.86', 
            '31.5497', 
            '31.418', 
            '33.6007', 
            '32.15', 
            '34', 
            '30.1978', 
            '34.75', 
            '25.3792', 
            '33.6989', 
            '30.192', 
            '29.3956', 
            '32.0836', 
            '32.5', 
            '27.6995', 
            '27.56', 
            '31.7167', 
            '31.7083', 
            '31.2681', 
            '30.05', 
            '32.5736', 
            '28.4202', 
            '31.1167', 
            '34.1958', 
            '34.7717', 
            '26.2442', 
            '30.6706', 
            '25.5269', 
            '30.81', 
            '30.15', 
            '28.2769', 
            '28.3006', 
            '33.5869', 
            '31.802', 
            '30.0703', 
            '28.6471', 
            '31.15', 
            '32.5861', 
            '34.15', 
            '26.0031', 
            '26.7319', 
            '29.9944', 
            '27.8', 
            '30.35', 
            '25.4667', 
            '29.1453', 
            '30.0419', 
            '31.3342', 
            '33.1333', 
            '30.7258', 
            '30.47', 
            '34.0153', 
            '34.1167', 
            '32.2917', 
            '31.8167', 
            '30.921', 
            '34.1453', 
            '28.4', 
            '29.7958', 
            '29.6967', 
            '33.7667', 
            '34.37', 
            '32.5853', 
            '32.7667', 
            '31.6333', 
            '31.3417', 
            '30.6708', 
            '32.811', 
            '30.4397', 
            '32.2653', 
            '25.4283', 
            '31.0214', 
            '29.61', 
            '29.6236', 
            '30.9667', 
            '31.0639', 
            '32.2628', 
            '32.475', 
            '29.8803', 
            '30.7408', 
            '30.4068', 
            '34.3333', 
            '32.7006', 
            '30.9639', 
            '31.4492', 
            '32.9889', 
            '32.2681', 
            '34.8281', 
            '33.8992', 
            '31.75', 
            '25.1264', 
            '30.5522', 
            '33.8195', 
            '32.2167', 
            '33.5281', 
            '34.0049', 
            '33.1167', 
            '32.4522', 
            '25.3614', 
            '35.8511', 
            '35.9206', 
            '31.9286', 
            '29.0258', 
            '33.5156', 
            '35.9208', 
            '32.102', 
            '27.5295', 
            '30.3017', 
            '32.9333', 
            '33.9942', 
            '27.9556', 
            '33.8578', 
            '32.0709', 
            '29.5383', 
            '34.5656', 
            '34.6796', 
            '25.5971', 
            '28.0064', 
            '26.8401', 
            '34.9', 
            '33.9803', 
            '34.5111', 
            '30.9646', 
            '25.1239', 
            '32.93', 
            '24.6558', 
            '32.6072', 
            '29.1041', 
            '28.4167', 
            '27.8473', 
            '30.5833', 
            '26.0464', 
            '35.2074', 
            '24.7461', 
            '28.5466', 
            '29.8965', 
            '29.7997', 
            '35.2917', 
            '34.5717', 
            '30.3705', 
            '29.8977', 
            '30.8594', 
            '30.3814', 
            '28.6132', 
            '29.543', 
            '29.0362', 
            '35.3471', 
            '25.8072', 
            '27.7384', 
            '35.4206', 
            '26.9644', 
            '36.1736', 
            '30.7008', 
            '28.5833', 
            '36.3078', 
            '26.4568', 
            '28.8885'

        ];

        $lngs =[
            '67.01', 
            '74.3436', 
            '73.079', 
            '73.0679', 
            '74.1833', 
            '71.5', 
            '71.4711', 
            '72.3572', 
            '68.3683', 
            '73.0369', 
            '67.007', 
            '71.6722', 
            '72.6711', 
            '74.5333', 
            '68.8673', 
            '68.2264', 
            '72.9833', 
            '74', 
            '72.3181', 
            '70.6333', 
            '74.0789', 
            '70.2952', 
            '74.45', 
            '72.0447', 
            '72.36', 
            '68.41', 
            '73.1064', 
            '69.0111', 
            '73.4597', 
            '72.6833', 
            '68.4514', 
            '70.1302', 
            '71.4414', 
            '74.255', 
            '71.1933', 
            '70.662', 
            '73.4917', 
            '73.2167', 
            '63.0544', 
            '67.775', 
            '73.2536', 
            '66.6167', 
            '73.4', 
            '68.7167', 
            '71.2617', 
            '72.3528', 
            '73.4194', 
            '73.75', 
            '72.6447', 
            '70.9644', 
            '71.9747', 
            '72.4667', 
            '72.35', 
            '70.9167', 
            '66.4597', 
            '71.7308', 
            '69.3', 
            '72.8578', 
            '72.5542', 
            '72.3667', 
            '73.4711', 
            '71.5436', 
            '74.2167', 
            '71.0667', 
            '69.4486', 
            '73.6533', 
            '73.865', 
            '72.3544', 
            '72.9028', 
            '68.2822', 
            '73.8528', 
            '73.1361', 
            '71.9167', 
            '72.4833', 
            '72.9611', 
            '75.1583', 
            '74.3522', 
            '71.295', 
            '73.8219', 
            '71.8667', 
            '73.2', 
            '73.9558', 
            '73.9803', 
            '73.7124', 
            '70.6056', 
            '74.6675', 
            '71.8408', 
            '70.1008', 
            '72.9167', 
            '62.3225', 
            '72.1278', 
            '72.689', 
            '70.3833', 
            '71.0572', 
            '71.9989', 
            '71.0833', 
            '71.4718', 
            '69.7361', 
            '71.7889', 
            '74.3783', 
            '70.4592', 
            '66.59', 
            '73.9019', 
            '74.3144', 
            '74.873', 
            '68.7592', 
            '71.9321', 
            '73.7333', 
            '72.9333', 
            '68.6382', 
            '73.7604', 
            '73.688', 
            '71.6333', 
            '71.9304', 
            '72.3598', 
            '73.0263', 
            '68.4467', 
            '69.315', 
            '68.1227', 
            '72.6556', 
            '73.7747', 
            '72.4844', 
            '70.9444', 
            '68.5389', 
            '72.85', 
            '68.8383', 
            '70.9123', 
            '70.3297', 
            '68.1667', 
            '67.9068', 
            '67', 
            '68.9481', 
            '71.8768', 
            '67.9243', 
            '68.2231', 
            '69.2532', 
            '66.8455', 
            '73.2906', 
            '73.8972', 
            '68.5979', 
            '69.5256', 
            '69.8221', 
            '67.7258', 
            '67.4856', 
            '67.8773', 
            '69.1585', 
            '74.8563', 
            '66.6228', 
            '66.6434', 
            '74.0967', 
            '64.0903', 
            '73.7667', 
            '68.3598', 
            '65.4167', 
            '74.6178', 
            '65.2314', 
            '64.4062'
        ];
      
        foreach ($cities as $key => $city) {
            City::create([
                            'name'          => $city,
                            'province_id'   => $provinces[$key],
                            'lat'           => $lats[$key],
                            'lng'           => $lngs[$key],
                        ]);
        }
    }
}