# Adding Yii Search to Your Browser Search Box | Wiki | Yii PHP Framework

> **Fonte / Source:** https://www.yiiframework.com/wiki/103/adding-yii-search-to-your-browser-search-box

---

## [Adding Yii Search to Your Browser Search Box](wiki__103__adding-yii-search-to-your-browser-search-box.md)

25    0

6

Viewed: 72 543 times

Version: all

Category: [Tips](wiki__index.md)

- [opensearch](wiki__index.md)
- [search](wiki__index.md)

Written by: [![qiang](/image/user/default_user.svg) qiang](https://www.yiiframework.com/user/2)

Updated by: [![CeBe](/user/avatar/5951?v=1) CeBe](https://www.yiiframework.com/user/5951)

Created: Nov 14, 2010

Updated: 8 years ago

1. [FireFox](#firefox)
2. [Internet Explorer](#internet-explorer)
3. [Chrome](#chrome)
4. [Opera](#opera)
5. [Maxthon Browser](#maxthon-browser)
6. [Credits](#credits)

The official Yii project site now supports OpenSearch. This means you can customize your browser's search box to enable direct search of the content in yiiframework.com. For example, by entering a Yii class name in the browser's search box, the corresponding class API page will be shown in the browser.

Below we explain how to customize your browser to enable this nice feature.

#### FireFox [¶](#firefox)

- Click on the dropdown button on the left of the browser search box.
- You should see two menu items: `Add "Yii API Search"` and `Add "Yii Site Search"`.
- Click on either or both of them to integrate the Yii search into your browser.

Your FireFox browser is now equipped with Yii search. If you enter a keyword (e.g. `CController`) in its search box, the corresponding Yii search result page will be displayed.

#### Internet Explorer [¶](#internet-explorer)

- Click on the dropdown button on the right of the browser search box.
- Click on the menu item `Add Search Providers` and choose `Yii API Search` and/or `Yii Site Search`.

Your Internet Explorer is now equipped with Yii search. If you enter a keyword (e.g. `CController`) in its search box, the corresponding Yii search result page will be displayed.

#### Chrome [¶](#chrome)

You don't need to do anything. To do a Yii search, you do the following steps:

- Enter `yiiframework.com` in the browser URL address field and press TAB or SPACE key to toggle Yii API Search.
- Keep entering the keyword you want to look for and press ENTER. The browser will show the Yii search result page.
- You can change search access keyword. Right Click in the address bar and select Edit Search Engines and on the next window select Yiisearch and Edit. here you can change access keyword E.G. `yii`. searching will be able as `{keyword}<TAB>{query}`

#### Opera [¶](#opera)

This requires more work than the above.

- Go to [Yii class reference page](http://www.yiiframework.com/doc/api/).
- Put cursor on the left column search field and in context menu select `create search`.
- Enter `yii` to the keyword field and save.
- Close Opera.
- Go to Opera's profile directory.
- Open search.ini.
- Find your search section by searching "yii".
- Add the following to the end of the section and save.

```
Suggest Protocol=JSON
Suggest URL=http://www.yiiframework.com/api/suggest/?q={SearchTerm}&json=1
```

Now restart Opera and try typing `yii ca` in your address bar.

#### Maxthon Browser [¶](#maxthon-browser)

- In main Maxthon menu go `Tools > Maxthon Setup Center`
- In Setup Center menu select `Search`
- In search preferences select `Add item`

  ```
  Title: `Yii API Search`
  Alias: `yii`
  URL: http://yiiframework.com/search/?type=api-suggest&q=%s
  ```
- Now Yii API Search available from Maxthon browser searchbar or simply from addresss bar using `yii<SPACE>query`. There is no autosuggest ability in Maxthon.

#### Credits [¶](#credits)

- [GOsha](http://www.yiiframework.com/user/6286/) for his initiative in implementing OpenSearch in yiiframework.com.
- [samdark](http://www.yiiframework.com/user/415/) for his finding in configuring the Yii search in Opera.
