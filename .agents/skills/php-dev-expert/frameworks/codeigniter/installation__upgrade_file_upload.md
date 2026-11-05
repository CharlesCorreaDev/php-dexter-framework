# Upgrade Working with Uploaded Files — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_file_upload.html

---

# Upgrade Working with Uploaded Files[](#upgrade-working-with-uploaded-files "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [File Uploading Class Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/file_uploading.html)
- [Working with Uploaded Files Documentation CodeIgniter 4.x](libraries__uploaded_files.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- The functionality of the file upload has changed a lot. You can now check if the file got uploaded without errors and moving / storing files is simpler.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

In CI4 you access uploaded files with `$file = $this->request->getFile('userfile')`. From there you can validate if the file got uploaded successfully with `$file->isValid()`.
To store the file you could use `$path = $this->request->getFile('userfile')->store('head_img/', 'user_name.jpg');`. This will store the file in **writable/uploads/head\_img/user\_name.jpg**.

You have to change your file uploading code to match the new methods.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

class Upload extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $this->load->view('upload_form', array('error' => ' ' ));
    }

    public function do_upload()
    {
        $config['upload_path']   = './uploads/';
        $config['allowed_types'] = 'png|jpg|gif';
        $config['max_size']      = 100;
        $config['max_width']     = 1024;
        $config['max_height']    = 768;

        $this->load->library('upload', $config);

        if (! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->upload->display_errors());

            $this->load->view('upload_form', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());

            $this->load->view('upload_success', $data);
        }
    }
}
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

namespace App\Controllers;

class Upload extends BaseController
{
    public function index()
    {
        return view('upload_form', ['error' => ' ']);
    }

    public function do_upload()
    {
        $this->validateData([], [
            'userfile' => [
                'uploaded[userfile]',
                'max_size[userfile,100]',
                'mime_in[userfile,image/png,image/jpg,image/gif]',
                'ext_in[userfile,png,jpg,gif]',
                'max_dims[userfile,1024,768]',
            ],
        ]);

        $file = $this->request->getFile('userfile');

        if (! $path = $file->store()) {
            return view('upload_form', ['error' => 'upload failed']);
        }
        $data = ['upload_file_path' => $path];

        return view('upload_success', $data);
    }
}
```
