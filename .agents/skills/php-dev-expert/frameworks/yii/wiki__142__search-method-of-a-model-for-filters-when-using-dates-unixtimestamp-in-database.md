# Search method of a model for filters when using dates - unixtimestamp in database | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/142/search-method-of-a-model-for-filters-when-using-dates-unixtimestamp-in-database

---

## [Search method of a model for filters when using dates - unixtimestamp in database](wiki__142__search-method-of-a-model-for-filters-when-using-dates-unixtimestamp-in-database.md)

10    0

11

Viewed: 41 967 times

Version: 1.1

Category: [Tips](wiki__index.md)

- [cdbcriteria](wiki__index.md)
- [CGridView](wiki__index.md)
- [filter](wiki__index.md)
- [model](wiki__index.md)
- [search](wiki__index.md)

Written by: [![Mukke](/user/avatar/2346?v=1) Mukke](https://www.yiiframework.com/user/2346)

Updated by: [![jwerner](/user/avatar/147?v=2) jwerner](https://www.yiiframework.com/user/147)

Created: Feb 10, 2011

Updated: 15 years ago

I ran into a problem and on irc we worked it out. Since there is a lack on information on filters in genral i thought i'd start sharing all my findings, might be usefull for other people.

One of the problems was when your users search for a date, let's say for the date of an event.
For general ease i work with unix timestamps in my database. So for the start time of an event it's somewhere in a day but usually not the very beginning of the day nor the very end.

so first we have to work out the date to a time and get the start and the end of that day in timestamp format: (in my country my users work in the format day/month/year but you gotta change this to your needs)

```
list($day,$month,$year) = explode("/",$this->start);
$daystart= mktime(0,0,0,(int)$month,(int)$day,(int)$year);
$dayend= mktime(23,59,59,(int)$month,(int)$day,(int)$year);
```

Then we need to add the condition for the CDbCiteria:

```
$criteria->condition = ':s<=start AND start<=:e';
$criteria->params=array(':s'=>$daystart,':e'=>$dayend);
```

now because if you put nothing in the date search field of the filter it would result in no records found. This is because an empty date would try to find on a mktime(0,0,0,0,0,0) which results in january 1st 1970 or something, so unless you have an event that exact date (would seem most unlikely), you will have no results.
Therefor we would just check if empty before doing the condition, my complete search method would be something like this( bar the other attributes that can be searched)

```
public function search()
	{

		$criteria=new CDbCriteria;

		if(!empty($this->start))
		{
			list($day,$month,$year) = explode("/",$this->start);
			$daystart= mktime(0,0,0,(int)$month,(int)$day,(int)$year);
			$dayend= mktime(23,59,59,(int)$month,(int)$day,(int)$year);
			$criteria->condition = ':s<=start AND start<=:e';
			$criteria->params=array(':s'=>$daystart,':e'=>$dayend);
		}

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
```
