<?php
/**
 * DetectBrowser.class.
 * v 0.1.1
 * автор: OL Werdffelynir.
 * бновлено: 12.01.2013
 */ 

class DetectBrowser {
	const  CLASS_V	= "<span style='color:red'>DetectBrowser.class. version 0.1.1 (data 02.18.13)</span>";
	public $browser;
	public $userAgent;
	public $name;
	public $version;
    public $platform;
	private $regChrom = "/Chrome/";
	private $regMozilla = "/Firefox/";
	private $regOpera = "/Opera/";
	private $regSafari = "/Safari/";
	private $regiPhone = "/iPhone/";
	private $regiPad = "/iPad/";
	private $regiAndroid = "/Android/";
	private $regIE5 = "/MSIE 5/";
	private $regIE6 = "/MSIE 6/";
	private $regIE7 = "/MSIE 7/";
	private $regIE8 = "/MSIE 8/";
	private $regIE9 = "/MSIE 9/";
	private $regIE10 = "/MSIE 10/";
	private $regLuna = "/Lunascape/";
	private $unknown;
	private $os;
	private $osWindows ="/Win/i";
	private $osLinux ="/Linux/i";
	private $osUNIX ="/Unix/i";
	private $osMacintosh ="/Mac/i";
	
	function __construct(){
		$userAgent = $_SERVER['HTTP_USER_AGENT'];
		$this->userAgent = $userAgent;
		
		if(preg_match($this->regChrom, $userAgent) )
		{
			$this->browser = "Chrome";
		}
		elseif(preg_match($this->regMozilla, $userAgent) )
		{
			$this->browser = "Mozilla";
		}
		elseif(preg_match($this->regOpera, $userAgent) )
		{
			$this->browser = "Opera";
		}
		elseif(preg_match($this->regiPhone, $userAgent) )
		{
			$this->browser = "iPhone";
		}
		elseif(preg_match($this->regiPad, $userAgent) )
		{
			$this->browser = "iPad";
		}
		elseif(preg_match($this->regiAndroid, $userAgent) )
		{
			$this->browser = "Android";
		}
		elseif(preg_match($this->regSafari, $userAgent) )
		{
			$this->browser = "Safari";
		}
		elseif(preg_match($this->regIE5, $userAgent) )
		{
			$this->browser = "IE5";
		}
		elseif(preg_match($this->regIE6, $userAgent) )
		{
			$this->browser = "IE6";
		}
		elseif(preg_match($this->regIE7, $userAgent) )
		{
			$this->browser = "IE7";
		}
		elseif(preg_match($this->regIE8, $userAgent) )
		{
			$this->browser = "IE8";
		}
		elseif(preg_match($this->regIE9, $userAgent) )
		{
			$this->browser = "IE9";
		}
		elseif(preg_match($this->regIE10, $userAgent) )
		{
			$this->browser = "IE10";
		}
		elseif(preg_match($this->regLuna, $userAgent) )
		{
			$this->browser = "Lunascape";
		}else{
			$this->unknown = "else";
		}	
	}
	
	
	// короткое добавление нескольких слов (для стилей, например.)
	function only($b, $string){
		if($b == $this->browser){
			return $string;
		}
	}
	function notonly($b, $string){
		if($b !== $this->browser){
			return $string;
		}
	}
	
	// добавление файла в позицию, функция include
	function incl($b, $string){
		if($b == $this->browser){
			include $string;
		}
	}
	function notincl($b, $string){
		if($b !== $this->browser){
			include $string;
		}
	}
	
	
	function os($ossys){
		$userAgent = $this->userAgent;
		
		if(preg_match($this->osWindows, $userAgent) ){
			$this->os = "Windows";
		}elseif(preg_match($this->osLinux, $userAgent) ){
			$this->os = "Linux";
		}elseif(preg_match($this->osUNIX, $userAgent) ){
			$this->os = "UNIX";
		}elseif(preg_match($this->osMacintosh, $userAgent) ){
			$this->os = "Mac";
		}else{
			$this->os = "unknown";
		}
		
		if($ossys == $this->os){
			return true;
		}else{
			return false;	
		}	
	}
	
	function agent($browsersys){
		if($browsersys == $this->browser){
			return true;
		}else{
			return false;	
		}	
	}
	
	
	

}