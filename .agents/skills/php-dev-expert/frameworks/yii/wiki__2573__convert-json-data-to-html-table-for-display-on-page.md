# Convert JSON data to html table for display on page | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/2573/convert-json-data-to-html-table-for-display-on-page

---

## [Convert JSON data to html table for display on page](wiki__2573__convert-json-data-to-html-table-for-display-on-page.md)

0    0

2

Viewed: 118 861 times

Version: all

Category: [Tips](wiki__index.md)

- [html](wiki__index.md)
- [JSON](wiki__index.md)

Written by: [![shiv](/user/avatar/49611?v=3) shiv](https://www.yiiframework.com/user/49611)

Updated by: [![samdark](/user/avatar/415?v=1) samdark](https://www.yiiframework.com/user/415)

Created: Sep 28, 2022

Updated: a year ago

I have a calls which help me display json directly in html table.

```
Json2Table::formatContent($json);
```

The code of `Json2Table` class:

```
/**
 * Class convert Json to html table. It help view json data directly.
 * @author shiv
 *
 */
class Json2Table
{

    public static function formatContent($content, $class = 'table table-bordered')
    {
        $html = "";
        if ($content != null) {
            $arr = json_decode(strip_tags($content), true);
            
            if ($arr && is_array($arr)) {
                $html .= self::arrayToHtmlTableRecursive($arr, $class);
            }
        }
        return $html;
    }

    public static function arrayToHtmlTableRecursive($arr, $class = 'table table-bordered')
    {
        $str = "<table class='$class'><tbody>";
        foreach ($arr as $key => $val) {
            $str .= "<tr>";
            $str .= "<td>$key</td>";
            $str .= "<td>";
            if (is_array($val)) {
                if (! empty($val)) {
                    $str .= self::arrayToHtmlTableRecursive($val, $class);
                }
            } else {
                $val = nl2br($val);
                $str .= "<strong>$val</strong>";
            }
            $str .= "</td></tr>";
        }
        $str .= "</tbody></table>";
        
        return $str;
    }
}
```
