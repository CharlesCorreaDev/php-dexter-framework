# Upgrade Pagination — CodeIgniter 4.7.5 documentation

> **Fonte / Source:** https://codeigniter.com/user_guide/installation/upgrade_pagination.html

---

# Upgrade Pagination[](#upgrade-pagination "Link to this heading")

## [Documentations](#id1)[](#documentations "Link to this heading")

- [Pagination Class Documentation CodeIgniter 3.x](https://codeigniter.com/userguide3/libraries/pagination.html)
- [Pagination Documentation CodeIgniter 4.x](libraries__pagination.md)

## [What has been changed](#id2)[](#what-has-been-changed "Link to this heading")

- You have to change the views and also the controller in order to use the new pagination library.
- If you want to customize the pagination links, you need to create View Templates.
- In CI4 the pagination uses the actual page number only. You can’t use the starting index (offset) for the items which is the default in CI3.
- If you use [CodeIgnite\Model](models__model.md), you can use the built-in method in the Model class.

## [Upgrade Guide](#id3)[](#upgrade-guide "Link to this heading")

1. Within the views change to following:

   > - `<?php echo $this->pagination->create_links(); ?>` to `<?= $pager->links() ?>`
2. Within the controller you have to make the following changes:

   > - You can use the built-in `paginate()` method on every Model. Have a look at the code example below to see how you setup the pagination on a specific model.

## [Code Example](#id4)[](#code-example "Link to this heading")

### [CodeIgniter Version 3.x](#id5)[](#codeigniter-version-3-x "Link to this heading")

```
<?php

$this->load->library('pagination');
$config['base_url']    = base_url().'users/index/';
$config['total_rows']  = $this->db->count_all('users');
$config['per_page']    = 10;
$config['uri_segment'] = 3;
$config['attributes']  = array('class' => 'pagination-link');
$this->pagination->initialize($config);

$data['users'] = $this->user_model->get_users(FALSE, $config['per_page'], $offset);

$this->load->view('posts/index', $data);
```

### [CodeIgniter Version 4.x](#id6)[](#codeigniter-version-4-x "Link to this heading")

```
<?php

$model = new \App\Models\UserModel();

$data = [
    'users' => $model->paginate(10),
    'pager' => $model->pager,
];

return view('users/index', $data);
```
