# An alternative way to ElasticSearch | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/2255/an-alternative-way-to-elasticsearch

---

## [An alternative way to ElasticSearch](wiki__2255__an-alternative-way-to-elasticsearch.md)

1    0

2

Viewed: 52 048 times

Version: all

Category: [How-tos](wiki__index.md)

- [Index Engine](wiki__index.md)

Written by: [![Necip](/image/user/default_user.svg) Necip](https://www.yiiframework.com/user/272603)

Updated by: [![Necip](/image/user/default_user.svg) Necip](https://www.yiiframework.com/user/272603)

Created: Jul 1, 2018

Updated: 3 years ago

### myEleasticSearchAlternative [¶](#myeleasticsearchalternative)

1. [Why this post?](#why-this-post)
2. [Who will benefit from this post?](#who-will-benefit-from-this-post)

This article is for those who have dealt with the complexity of Elasticsearch or any other indexing machines and are looking for an easier way to index the existing database without additional effort.

*The sample code is adapted for the yii framework, but because of its simplicity it can easily be ported to other frameworks like symphony.*

#### Why this post? [¶](#why-this-post)

The amount of data increases every day. As a result, the search in the databases becomes longer and longer. Conventional data structures must be realigned in order to be able to access information more quickly. There are already database systems like Elasticsearch that can do this. However, such systems also have disadvantages.

The most noticeable major drawbacks are:

- Learning a new query language. SQL won’t get you far or is not flexible enough.
- The existing programs must be rewritten in order to process the new result sets appropriately.
- The safety regulations must be defined again.
- A second database must be set up, which in principle contains the same data.

#### Who will benefit from this post? [¶](#who-will-benefit-from-this-post)

This information is useful for any programmer who wants to integrate an index database into his existing system in a simple way without additional effort.

##### The basic idea behind Indexing-machines [¶](#the-basic-idea-behind-indexing-machines)

We will use this simple Table to demonstrate what an Index-machine does

```
Tablename: object

UID	TITLE	DESCRIPTION
4711	Rudyard Kipling	If you can keep your head when all about you …
4712	John Magee	I have slipped the surly bonds of Earth and danced the skies on laugher-silvered wings …
4713	Wiliam Wordsworth	Ten thousand saw I at a glance, Tossing their heads in sprightly dance…
```

With this request we can find very specific texts in this single table:

```
SELECT ID, Title, Description
FROM object
WHERE Description like '%head%'
```

But what if we want to find ‚%head%‘ in all tables of our database? We have to write a code to do this job for us. This is inefficent and will work very slowy. The idea behind Elasticsearch and other indexing tables is – so far I understood – to break the strings in single tokens. That means in a very easy way that we have to transform the horicontal order of the table into a vertical order.

```
Tablename: ncp_index

UID	TABLENAME	FIELDNAME	ID	TOKEN
1001	object	Description	4711	if
1002	object	Description	4711	you
1003	object	Description	4711	can
…				
1010	object	Description	4712	I
1011	object	Description	4712	have
1012	object	Description	4712	slipped
…				
```

We can tokenize any field of any table of our database into the table ncp\_index. Now we can find with a single query very fast any (tokenized) word in our hole database.

```
SELECT Tablenname, Fieldname, Token
FROM ncp_index
WHERE Token like '%head%'
```

That is the secret of any Index-Searchengine.
Yes, the ncp\_index table has a lot of redundant data that we can normalize as follows:

Every field is stored in a system table and has a unique id. let us call it field\_id
Every content of a field has a lot of same words. These words should be stored only once in a separat words-table.

Our ncp\_index table looks now so:

```
UID	FIELD_ID	ID	TOKEN_ID
1001	123	4711	1
1002	123	4711	2
1003	123	4711	3
…			
1010	123	4712	4
1011	123	4712	5
1012	123	4712	6
…	
```

```
Systemtable: fields

UID	TABLENAME	NAME
122	object	Name
123	object	Description
…		
```

```
Tablename: word

UID	TOKEN
1	if
2	you
3	can
…	
```

##### Some basic examples [¶](#some-basic-examples)

```
/**
 * @author ncp <necips@live.de>
 */
class NCPSearch
{
    /**
     * @param $model
     * @param $tablename
     * @param $fieldnames
     */
    public static function delete_ncp_search_item($model, $tablename) {
        $criteria = new CDbCriteria;
        $criteria->condition = "tablename = :tablename " .
                    "AND id = :id ";
        $criteria->params[":tablename"] = $tablename;
        $criteria->params[":id"] = $model->uid;
        NCPIndexModel::model()->deleteAll($criteria);
    }
    /**
     * @param $model
     * @param $tablename
     * @param $fieldnames
     */
    public static function update_ncp_search_item($model, $tablename, $fieldnames) {
        NCPSearch::delete_ncp_search_item($model, $tablename);
        NCPSearch::insert_ncp_search_item($model, $tablename, $fieldnames);
    }
    /**
     * @param $model
     * @param $tablename
     * @param $fieldnames
     */
    public static function insert_ncp_search_item($model, $tablename, $fieldnames) {
        foreach ($fieldnames as $fieldname) {
            $NCP_index_model = new NCPIndexModel("create");
            $NCP_index_model->tablename = $tablename;
            $NCP_index_model->fieldname = $fieldname;
            $NCP_index_model->id = $model->uid;
            $NCP_index_model->save();
            // a very simple way to tokenize the strings!
            $raw = strip_tags($model->{$fieldname});
            $tokens = explode( ' ', $raw);
            foreach ($tokens as $token) {
                $NCP_token_model = new NCPTokenModel("create");
                $NCP_token_model->NCP_index_uid = $NCP_index_model->uid;
                $NCP_token_model->token = $token;
                $NCP_token_model->save();
            }
        }
    }
    /**
     * @param $models
     * @param $tablename
     * @param $fieldnames
     */
    public static function insert_ncp_search_items($models, $tablename, $fieldnames) {
        foreach ($models as $model) {
            NCPSearch::insert_ncp_search_item($model, $tablename, $fieldnames);
        }
    }
}

// main.php:

// initialize ncp_search table once with all tables which has to be indexed in the main function
NCPSearch::insert_ncp_search_items(UserModel::model()->findAll(), "user", ["login", "mail", "name_last", "name_first"]);
NCPSearch::insert_ncp_search_items(DepartmentModel::model()->findAll(), "department", ["title", "description"]);
NCPSearch::insert_ncp_search_items(ObjectModel::model()->findAll(), "object", ["title", "description"]);
  

// model.php:

class Object : Model
{
  function afterSave()  {
    
    
     // insert this code to synchronize the informations on ncp_index
     if ($this->status === ObjectStatus::DELETED)
            NCPSearch::delete_ncp_search_item($this, "object");
        else
            NCPSearch::update_ncp_search_item($this, "object", ["title", "description"]);       
            
    ...
  }
  
  ...
  
}
```

##### Conclusion [¶](#conclusion)

These are my basic observations on this subject. These are the first steps to a search-engine that can index existing tables so that informations can be found quickly.

##### Thanks to [¶](#thanks-to)

Translated with www.DeepL.com/Translator

Elasticsearch: <https://www.elastic.co/blog/a-practical-introduction-to-elasticsearch>
