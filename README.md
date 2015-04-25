# Local Browser Start Page

I only uploaded this because a buddy wanted to use it and it was easier to just put it in a public repo. All of my links are still in place for now.

**It's intended for local use as a "New Tab" page.**

### Setting As New Tab Page

I use Chrome. Apparently, there's no setting for the New Page URL. :rage: Instead, there's a setting for the **Home Button** which displays up by the URL bar. Clicking that will take you to whatever page you have it set as.

Here's the deal, though. That's not the same thing as the New Tab page. Likewise, the Home Button uses the default Chrome New Tab page by default. This means you can't actually set the New Tab page. So lame.

What I did was find a Chrome extension that redirects the New Tab to a URL (my local URL). Cool. But there are a few drawbacks:

* After the redirect, the focus is no longer in the URL bar.
* The redirect takes a little longer.
* If you're like me and open a new tab specifically to search Google, just cry.

What I did on this page was add a standard Google search form (not a site search, just a web search) and set the cursor to autofocus in that search field. It's not TOO bad. Still sucks, though.

### Adding Sites

`sites.php` just has a bunch of arrays in it and `index.php` just loops through those arrays grabbing links and stuff. Simple.

For WordPress sites, the array items have a `wordpress` key where you'd either give it true or false. If you set it to `true`, a link to the dashboard will also appear under your site link.

This behavior is different based on the different loops in the index file because again, I made this for me. Down in my local development section, I also wanted links directly to the plugins and themes pages in my WordPress dashboards. So yea... those are there too. Again, though, all it takes is giving the `wordpress` key a `true` value.

If the array doesn't have a `wordpress` key, that means the HTML isn't set up to grab one anyway. Adjust as needed.

### Stylez

Even though I never had intentions of any of you ever seeing this, I'm pretty sure I followed good practices when it comes to pairing HTML and CSS... because standards. So there should be a class for just about everything.

You should be able to tap into what I already have there even if you adjust the HTML structure. I'm not really sure why I'm saying this, though, because you know what you're doing.

### Favicons

I'm using Google's little favicon finder tool thing. http://www.google.com/s2/favicons?domain=

So in the arrays found in `sites.php`, just add the domain of the site as the value of the `favicon` array key (concatenated with the `$favicon` variable, of course) and let Google work.

_Note: Trello and Dropbox were acting funky and didn't return favicons. So I made the images and put them in place myself because try to stop me._

### Screenshots

Here's a preview with all my personal links in place:

![Preview](http://dl.dropboxusercontent.com/s/b15iccn6turlxrq/2015-04-24%20at%2011.19%20PM.png)

### Final Words

Ummm... please don't take this seriously. Just take it and do stuff with it if you want to.
