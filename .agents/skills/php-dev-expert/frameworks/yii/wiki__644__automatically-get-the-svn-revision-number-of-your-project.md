# Automatically get the SVN Revision Number of your Project | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/644/automatically-get-the-svn-revision-number-of-your-project

---

## [Automatically get the SVN Revision Number of your Project](wiki__644__automatically-get-the-svn-revision-number-of-your-project.md)

3    0

4

Viewed: 18 301 times

Version: all

Category: [Tutorials](wiki__index.md)

- [project versioning](wiki__index.md)
- [revision](wiki__index.md)
- [svn](wiki__index.md)

Written by: [![jcagentzero](/user/avatar/46069?v=1) jcagentzero](https://www.yiiframework.com/user/46069)

Updated by: [![jcagentzero](/user/avatar/46069?v=1) jcagentzero](https://www.yiiframework.com/user/46069)

Created: Apr 10, 2014

Updated: 12 years ago

When you are handling so many projects and those projects are saved in different repository locations, you may find it very difficult to keep track all the versions and revisions manually and it will be much harder if you are developing in multiple repository branches.

For example, you have project named example.com and located in <http://svnserver/example.com/trunk>. But there are two projects branched out from the same trunk but has different modifications and you are doing the modifications at the same time. You have <http://svnserver/example.com/branches/blog.example.com> and <http://svnserver/example.com/branches/bloggable.example.com>. When you update this branches it will give you revision and changed revision. revision is the revision number of the whole repository location, while changed revision is the revision of specific files and folders.

Let us say you have the following changed revisions and you want to display them in your websites for you to know what is the exact revision number to need to checkout when you need to modify or fix bugs.

- <http://svnserver/example.com/trunk> 223r
- <http://svnserver/example.com/branches/blog.example.com> 220r
- <http://svnserver/example.com/branches/bloggable.example.com> 219r

**Solution:** I created a component where it will get the exact changed revision number, all you need to do is to update/checkout your repository.

```
class GetChangedRevision {

    public function getRevision() {

        if (file_exists(dirname(__FILE__) . '/../../.svn/wc.db')) {

            $db = new SQLite3(dirname(__FILE__) . '/../../.svn/wc.db');

            $result = $db->query('SELECT changed_revision FROM nodes WHERE local_relpath = "" LIMIT 1');
            if ($result) {
                $row = $result->fetchArray();
                if ($row['changed_revision'] != "") {
                    $row['changed_revision'] = "." . $row['changed_revision'];
                }
            }
            $svnrev = $row['changed_revision'];
        } else if (file_exists(dirname(__FILE__) . '/../../.svn/entries')) {

            $svn = File('.svn/entries');
            $svnrev = "." . $svn[10];
            unset($svn);
        }
        
        return $svnrev;
    }

}
```

Then in your view/layout or where ever you want to display the changed revision number. Add the following code.

```
$svnrev = new GetChangedRevision();
echo "Revision: ".$svnrev->getRevision();
```

That's it. Hopefully this will be helpful to you guys.

[Jundy Cosmod Site](http://jundycosmod.com "Jundy Cosmod Site")
