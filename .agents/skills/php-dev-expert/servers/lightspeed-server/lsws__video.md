# Video | LiteSpeed Web Server | LiteSpeed Documentation

> **Fonte / Source:** https://docs.litespeedtech.com/lsws/video/

---

# Video Streaming[¶](#video-streaming "Permanent link")

LiteSpeed Web Server supports streaming for `.mp4` and `.f4v` video files with random seek.

## Setup[¶](#setup "Permanent link")

To enable this feature, make sure that files with suffixes `.mp4` or `.f4v` have a MIME type of `video/mp4`.

The MIME settings file is located under `/path\_to\_lsws/conf/mime.properties`, or you can update the setting in the WebAdmin Console:

Navigate to **Server > General > MIME Settings**.

If you cannot find an entry for the mp4 or f4v suffixes, you can add them by clicking the **Add** button at the top right of the page and entering the following information:

**Suffix:** `f4v,mp4`  
 **Mime Type:** `video/mp4`

## Testing[¶](#testing "Permanent link")

There are two very simple methods of testing this out:

1. Viewing your video file directly
2. Embedding your video in a page

### Viewing your video file directly[¶](#viewing-your-video-file-directly "Permanent link")

- Place your video file (`video.mp4` in this example) in your site's document root.
- In your browser's address bar, enter `https://example.com/video.mp4` (Your IP address or `localhost` should work here as well).

If everything is working correctly, your video should be displayed and able to play.

### Embedding your video in a page[¶](#embedding-your-video-in-a-page "Permanent link")

- Place your video file (`video.mp4` in this example) in your site's document root.
- Open the HTML file of the page where you would like to insert the video.
- Insert the following code into the appropriate area of the HTML file:

```
<video width="320" height="240" controls>
  <source src="video.mp4" type="video/mp4"> 
</video>
```

The video should now appear on the associated web page of your site, and you can play it from there. For more Information on embedding MP4 videos using HTML as well as some more options available with this method, visit [w3schools.com](http://www.w3schools.com/html/html5_video.asp).
