<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

}
/*
<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract{

	use Authenticatable;

	protected $table = 'users';

}


<?php namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model {

	protected $table = 'purchase';
	
	public static function joining(){
		
		return DB::table('purchase')
            ->join('suppliers', 'purchase.suppliersid', '=', 'suppliers.id')
			->select('purchase.id','purchase.name as pname', 'suppliers.name as sname', 'purchase.suppliersbilldate','purchase.status')
			->where('purchase.cstatus',0)
            ->orderBy('id', 'desc')->take(10)->get();
		//$voucher = Voucher::orderBy('id', 'desc')->take(10)->get();
		//DB::table('users')
            //->join('contacts', 'users.id', '=', 'contacts.user_id')
           // ->join('orders', 'users.id', '=', 'orders.user_id')
           // ->select('users.id', 'contacts.phone', 'orders.price')
           // ->get();
	}

}



<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Info extends Model {
	public static function callinfo($value,$spname){
		$cn=count($value);
		$str="call  ".$spname."(";
		for($i=0;$i<$cn;$i++)
		{
			$strarray="'$value[$i]',";
			$str=$str.$strarray;
		}
		$len=strlen($str);
		$strtext= substr($str,0,$len-1);
        $strfinal=');'; 		
		$strlast=$strtext.$strfinal;
		$result= DB::select(DB::raw("$strlast"));	
		return $result;
	}
        
}

<?php namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;
class Combo extends Model {
    public static function callcombo($spname){
		$str="call  ".$spname."(";
        $strfinal=');'; 		
		$strlast=$str.$strfinal;
		$result= DB::select(DB::raw("$strlast"));
		return $result;
	}	
}

*/

/*
//VIEW
function cancel_status(sales_id) {	            			
		    //alert(sales_id);	
            $_token = "{{ csrf_token() }}";
            $.ajax({
	            type: "POST",
	            url: "physicalsales/cancel_status",
	            data: {
					_token: $_token,
					sales_id: sales_id,
					},
	            success: function (response) {
	            	if(response == 0){
	            		alert("Not found this item.");
	            	} else if(response == 1){
	            		location.reload();
	            	}
	           	}
	        });			
}
//ROUTER
Route::any('physicalsales/cancel_status', 'PhysicalsaleController@cancel_status');

//CONTROLLER
public function cancel_status(Request $request)
	{
		    
			if($request->ajax()){
				$sales_id=$request->input('sales_id');
				$sales=Physicalsale::find($sales_id);
				if(!empty($sales)){
				    $sales->delete();
				}else{
					return response()->json(0);
				}
				return response()->json(1);
			}
	}

*/
