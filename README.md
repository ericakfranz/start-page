# LOCAL Browser Start Page

_You must have a local server to run this on your machine._

This is nothing more than a one-page site that I use as my new tab page in my browsers.

I only uploaded this because a buddy wanted to use it and it was easier to just put it in a public repo. I have removed all of my personal links and filled it with random sites.

**This is intended for local use as a "New Tab" page.**

### Setting As New Tab Page

I use Google Chrome. Apparently, there's no way to set the URL of the New Tab page. :rage: Instead, there's a setting for the **Home Button** which displays beside the URL bar. Clicking that will take you to whatever page you have it set to.

Here's the deal, though. That's not the same thing as the New Tab page, which cannot be set. Likewise, the Home Button uses the Chrome New Tab page by default. So you can't actually set the New Tab page at all. So lame.

What I did was find a [Chrome extension](https://chrome.google.com/webstore/detail/new-tab-redirect/icpgjfneehieebagbmdbhnlpiopdcmna) that redirects the New Tab page to a URL (my local URL) and that's where I run this start page. Cool. But there are a few drawbacks:

* After the redirect, the focus is no longer in the URL bar. In the extension linked above, there's a setting to control this, but it does not highlight the URL content. It just places the cursor after the content. That's useless.
* The redirect takes a little longer to load than the default New Tab page.
* If you're like me and open a new tab specifically to search Google, just cry.

What I did on this page was add a standard Google search form (not a site search, just a web search) and set the cursor to autofocus in that search field. It's not TOO bad. It still sucks, though.

### Adding Sites

`sites.php` just has a bunch of arrays in it and `index.php` simply loops through those arrays grabbing links and other information. Simple. You can put any kind of links you want there though I added "support" for WordPress, if you want to call it that.

For WordPress sites, the array items have a `wordpress` key where you'd either give it `true` or `false` value. If you set it to `true`, you now have the opportunity to display WordPress dashboard related links on the front-end.

`admin`, `themes`, and `plugins` are three additional array keys that when set to `true` will display links to your WordPress dashboard based on the URL you also provided in the array item. You can set any of the aforementioned values to `false` and simply display a link to the site by itself.

### Styles

Even though I never had intentions of ever "releasing" this to the public, I'm pretty sure I followed good practices when it comes to pairing HTML and CSS... because standards. So there should be a class for just about everything you need.

You should be able to tap into what I already have in place even if you adjust the HTML structure. 

The structure is designed for you to be able to move sections around however you want them. It also includes three different types of sections:

1. A section divided into columns of three that simply displays links.
2. A section that does not have a major heading and just displays a row of links with favicons.
3. A section meant to be dedicated to one project. It displays the primary site links on the left (in the manner mentioned above) and a section to the right where you add groups of resources pertaining to the project.

The entire structure is responsive. Why? I don't know. Maybe you find that useful locally. :)

### Favicons

I'm using Google's favicon finder tool. http://www.google.com/s2/favicons?domain=EXAMPLE.COM

So in the arrays found in `sites.php`, simply add the domain of the site as the value of the `favicon` array key (concatenated with the `$favicon` variable, of course) and let Google do the work.

_Note: Google won't be able to fetch a favicon from some sites. When that happens, you can create one yourself, load it from the local `start-page/assets/images/` folder, and set its path as the value of the `favicon` array key._

### Screenshots

Here's a preview with all my personal links in place:

![Preview](http://dl.dropboxusercontent.com/s/rm4fs64qff6sggp/2015-04-24%20at%2011.42%20PM.png)

Here's what it looks like by default when you first set it up: [preview](http://dl.dropboxusercontent.com/s/oz33yvxtbhewh5h/2015-04-25%20at%204.03%20AM.png)

### Final Words

Please don't take this too seriously. Just use it if you like it. Adjust it to your needs. Suggest changes to it (PRs are welcome). Or simply let it be.
