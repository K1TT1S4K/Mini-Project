<?php

namespace App\Livewire\Article;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    public $idd,$title,$detail;//$photo;
    public function edit(){
        Article::where('id', $this->idd)->update([
            'title' => $this->title,
            'detail' => $this->detail,
        ]);
        return redirect()->to(route('article'));

    }
    public function mount($id){
        $data = Article::find($id);
        $this->idd = $id;
        $this->title = $data->title;
        $this->detail = $data->detail;
        dd($data);
    }

    public function render()
    {
        return view('livewire.article.edit');
    }
}
