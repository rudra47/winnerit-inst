 <?php 
class Helper{
	public static function username_generate($string){
		return $string.rand(100,2000);
	}
	public static function password_generate($string){
		return $string.Str::random(5);
	}
}