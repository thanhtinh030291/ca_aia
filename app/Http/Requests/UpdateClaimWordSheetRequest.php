<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\ClaimWordSheet;
use App\Http\Traits\SanitizesInput;

class UpdateClaimWordSheetRequest extends FormRequest
{
    use SanitizesInput;
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = ClaimWordSheet::$rules;
        
        return $rules;
    }

    public function sanitize(array $input)
    {
        $price_list = removeFormatPriceList(
            [
                'claim_amt' => data_get($input, 'claim_amt'),
                'payable_amt' => data_get($input, 'payable_amt'),
            ]
        );
        return $price_list;
    }
}
