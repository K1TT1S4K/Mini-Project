<?php

namespace App\Livewire\Project;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class Add extends Component
{
    use WithFileUploads;
    public $name, $email, $password, $photo;
    public function add(){
        $this->validate([
            'title' => 'required|min:2',
        ],
        [
            'title.required' => 'กรุณากรอกชื่อ',
            'title.min' => 'กรุณากรอกข้อมูลมากกว่า 2 ตัวอักษร',
        ]);
        //dd($this->weight);
        try{
            $model = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'password' => Hash::make($this->password),
                'create_by' => auth()->user()->id,
                'is_admin' => $this->is_admin,

            ]);
            if($this->image){
                $fullpath = $this->image->store('images','public');
                $model->image_path = $fullpath;
                $model->save();
            }
            return redirect()->to(route('project'));
        }
        catch(\Exception $e){
            dd($e);
        }
    }
    public function render()
    {
        return view('livewire.project.add');
    }
}
