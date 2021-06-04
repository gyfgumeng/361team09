<?php
namespace app\index\controller;


class Index
{

	public function index()
	{
		return view();
	}

	public function upload()
	{
	    // get list of upload, for example 001.jpg
	    $file = request()->file('file');
	    // Move to the framework application root directory/uploads/ directory
	    $info = $file->move( './upload');
	    if($info){

	    	return json(array('code' => 1, 'data' => $info->getSaveName()) );
	        // Get upload information after successful upload
	        // Output jpg
	        //echo $info->getExtension();
	        // Output 20160820/42a79759f284b767dfcb2a0197904287.jpg
	        //echo $info->getSaveName();
	        // Output 42a79759f284b767dfcb2a0197904287.jpg
	        //echo $info->getFilename(); 
	    }else{
	        // Upload failed to get error information
	        // echo $file->getError();
	        return json(array('code' => 0, 'data' => $file->getError()) );
	    }
	}

	public function pdf()
	{
		$filename = request()->get('filename');
		$content = file_get_contents('./upload/'.$filename);
		
		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetDisplayMode('fullpage');
        //Automatically analyze the font of the input content
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        // Custom article pdf file storage path
        $fileUrl = str_replace('.txt', '', $filename.".pdf");
        //By default, html is the standard to analyze and write content
        $mpdf->WriteHTML($content);
        // File generation instructions
        $mpdf->Output($fileUrl, true);
	}

	public function fanyi()
	{
		$filename = request()->get('filename');
		$content = file_get_contents('./upload/'.$filename);
		$val = $content;
		$from = 'en';
		$to = 'zh';
		$result = $this->language($val,$from,$to);

		$encoded_filename = urlencode($filename);    
		$encoded_filename = str_replace("+", "%20", $encoded_filename);    
		  
		header("Content-Type: application/octet-stream");   
		if (preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT']) ) {   
			header('Pragma: public');
		    header('Content-Disposition:  attachment; filename="' . $encoded_filename . '"');   
		} elseif (preg_match("/Firefox/", $_SERVER['HTTP_USER_AGENT'])) {   
			header('Pragma: no-cache');
		    header('Content-Disposition: attachment; filename*="' .  $filename . '"');   
		} else {   
		header('Pragma: no-cache');
		    header('Content-Disposition: attachment; filename="' .  $filename . '"');   
		}//Compatible with various browsers
	    echo $result;
	}

	public function pdffanyi()
	{
		$filename = request()->get('filename');
		$content = file_get_contents('./upload/'.$filename);
		$val = $content;
		$from = 'en';
		$to = 'zh';
		$result = $this->language($val,$from,$to);

		$mpdf = new \Mpdf\Mpdf();
		$mpdf->SetDisplayMode('fullpage');
        //Automatically analyze the font of the input content
        $mpdf->autoScriptToLang = true;
        $mpdf->autoLangToFont = true;
        // Custom article pdf file storage path
        $fileUrl = str_replace('.txt', '', $filename.".pdf");
        //By default, html is the standard to analyze and write content
        $mpdf->WriteHTML($result);
        // File generation instructions
        $mpdf->Output($fileUrl, true);
	}

	function language($value,$from="en",$to="zh")
    {
		$value_code = $value; 
		$appid = "20210526000842900"; //You registered API Key
		$key = "3n2HvUuwWKypHQf_M6Rt"; //Key
		$salt = rand(1000000000,9999999999); //random number
		$sign = md5($appid.$value_code.$salt.$key); //signature
		$value_code = urlencode($value_code);
		//Generate the URL of the translation API
		$languageurl = "http://api.fanyi.baidu.com/api/trans/vip/translate?q=$value_code&appid=$appid&salt=$salt&from=$from&to=$to&sign=$sign";
		$text = json_decode($this->language_text($languageurl));

		$lan = $text->trans_result;
		$result = '';
		foreach ($lan as $k => $v)
		{
		   $result .= ucwords($v->dst) ."\n";
		}
		return $result;
    }

	function language_text($reqURL)
    {
        $ch = curl_init($reqURL);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
        $result = curl_exec($ch);
        if($result){
            curl_close($ch);
            return $result;
        } else {
            $error = curl_errno($ch);
            curl_close($ch);
            return ("curl False: false code$error");
        }
    }
}
