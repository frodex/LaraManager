<?php namespace Philsquare\LaraManager\Http\Requests;

class UpdateObjectRequest extends Request {

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
            'title' => 'required|max:255|unique:objects,title,' . $this->segment(3),
            'slug' => 'required|max:255|unique:objects,slug,' . $this->segment(3),
            'description' => 'max:255'
        ];
    }

}