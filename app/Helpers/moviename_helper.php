<?php 




function test()
{
    echo "test";
}


 function divineMovieName($list_video)
{

	foreach ($list_video as $key =>  $value) {

		$name = divineMovieName_movie($value['movie_thname'], $value['movie_year']);
		$list_video[$key]['movie_thname'] = $name['thaiName'];
		$list_video[$key]['movie_enname'] = $name['engName'];

		if (empty($value['movie_year'])) {



			if (empty($value['movie_thname'])) {
				$list_video[$key]['movie_name'] =   $list_video[$key]['movie_enname'];
			} else if (empty($list_video[$key]['movie_enname'])) {
				$list_video[$key]['movie_name'] =   $list_video[$key]['movie_thname'];
			} else {
				$list_video[$key]['movie_name'] =   $list_video[$key]['movie_thname'] .  $list_video[$key]['movie_enname'];
			}
		} else {
			if (empty($list_video[$key]['movie_thname'])) {
				$list_video[$key]['movie_name'] =   $list_video[$key]['movie_enname'] . ' (' . $value['movie_year'] . ') ';
			} else if (empty($list_video[$key]['movie_enname'])) {
				$list_video[$key]['movie_name'] =   $list_video[$key]['movie_thname'] . ' (' . $value['movie_year'] . ') ';
			} else {
				$list_video[$key]['movie_name'] =   $list_video[$key]['movie_thname'] . ' (' . $value['movie_year'] . ') ' . $list_video[$key]['movie_enname'];
			}
		}
	}
	return $list_video;
	
}



 function divineMovieName_movie($str1, $year)
	{
		// print_r ((int)$year+1 .'<br>');


		if ($str1 = @str_replace([$year,($year-1),($year+1)], "", $str1)  ) {

			$str = str_replace("()", "", $str1);
		} else {
			$str = $str1;
		}
		$startEng = 0;
		$startThai = 0;
		$thaimatches = [];
		$engmatch = [];
		$thname = '';
		$engname = '';
		preg_match("/[ก-๙]/", $str, $thaimatches, PREG_OFFSET_CAPTURE);
		preg_match("/[a-zA-Z]/", $str, $engmatch, PREG_OFFSET_CAPTURE);
		//Start with number
		if (is_numeric(trim($str)[0])) {
			preg_match("/[0-9]*[\s]*[ก-๙]/", $str, $thaimatches, PREG_OFFSET_CAPTURE);
			preg_match("/[0-9]*[\s]*[A-Za-z]/", $str, $engmatch, PREG_OFFSET_CAPTURE);
			if (!empty($thaimatches)) //มีภาษาไทย
			{
				if (!empty($engmatch)) //มีไทยด้วย มีอังกฤษด้วย
				{
					$startThai = $thaimatches[0][1];
					$startEng = $engmatch[0][1];
					if ($startThai > $startEng) { //ชื่ออังกฤษมาก่อน
						$thname = substr($str, $startThai);
						$engname = substr($str, 0, $startThai);
					} else if ($startThai < $startEng) //ชื่อไทยมาก่อน
					{
						$engname = substr($str, $startEng);
						$thname = substr($str, 0, $startEng);
					}
				} else //มีไทยอย่างเดียว
				{
					$engname = '';
					$thname = $str;
				}
			} else if (!empty($engmatch)) //ไม่มีไทยแต่มีอังกฤษ
			{
				$engname = $str;
				$thname = '';
			} else //มีแต่ตัวอเลขกับอักษรพิเศษ
			{
				$thname = $str;
				$engname = '';
			}
		} else //Start with charactor
		{
			if (!empty($thaimatches)) //มีภาษาไทย
			{
				if (!empty($engmatch)) //มีไทยด้วย มีอังกฤษด้วย
				{
					$startThai = $thaimatches[0][1];
					$startEng = $engmatch[0][1];
					if ($startThai > $startEng) { //ชื่ออังกฤษมาก่อน
						$thname = substr($str, $startThai);
						$engname = substr($str, 0, $startThai);
					} else if ($startThai < $startEng) //ชื่อไทยมาก่อน
					{
						$engname = substr($str, $startEng);
						$thname = substr($str, 0, $startEng);
					}
				} else //มีไทยอย่างเดียว
				{
					$engname = '';
					$thname = $str;
				}
			} else if (!empty($engmatch)) //ไม่มีไทยแต่มีอังกฤษ
			{
				$engname = $str;
				$thname = '';
			} else //มีแต่ตัวอเลขกับอักษรพิเศษ
			{
				$thname = $str;
				$engname = '';
			}
		}

		return ([
			'thaiName' => $thname,
			'engName' => $engname
		]);
	}
