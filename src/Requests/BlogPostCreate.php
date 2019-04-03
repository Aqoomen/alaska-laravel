<?php namespace iPremium\Alaska\Requests;


use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class BlogPostCreate extends FormRequest
{
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
        return [
            'title' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Your article must have a title'
        ];
    }
    public function modifyInput()
    {
        $data = $this->all();

        if(isset($data['title'])){
            $data['code'] = Str::slug($data['title'], '-');
        }

        $this->replace($data);
    }
}
