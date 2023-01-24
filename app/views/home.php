<?php $this->layout('template', ['title' => $data->name, 'favicon'=> $pictures->favicon]) ?>

<?=$this->insert('sections/header', ['url_logo'=> $pictures->logo, 'date'=> $data->date, 'local'=> $data->local])?>

<?=$this->insert('sections/nav')?>

<?=$this->insert('sections/about', ['title' => $data->name, 'about'=> $data->about, ])?>

<?=$this->insert('sections/speakers', ['speakers'=> $speakers])?>

<?=$this->insert('sections/local', ['maps'=> $local->code_maps, 'address'=> $local->full_address])?>

<?=$this->insert('sections/schedule', ['schedules'=> $schedules])?>

<?=$this->insert('sections/register', ['url_register'=> $data->url_register])?>

<?=$this->insert('sections/sponsors', ['sponsors'=> $sponsors])?>

<?=$this->insert('sections/footer')?>
