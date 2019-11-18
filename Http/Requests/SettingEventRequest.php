<?php

namespace Modules\Event\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingEventRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

     protected function prepareForValidation()
    {
        $start_end_date = $this->start_end_date;
        $start_end_date = str_replace(' ', '', $start_end_date);
        $start_end_date = explode('-', $start_end_date);
        $start = $this->formatDate($start_end_date[0]);
        $end = $this->formatDate($start_end_date[1]);



        $this->merge([
            'start' => $start,
            'end' => $end
        ]);
    }

    public function formatDate($date){
        $date_splited = explode('/', $date);
        return $date_splited[2].'-'.$date_splited[1].'-'.$date_splited[0];
    }
}
