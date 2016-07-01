Splice plugin 1.0
=======================
Embed [Splice](http://www.splice.com) audio projects into yellow.

![Screenshot](splice-browser.png?raw=true)

How do I install this?
----------------------
1. Download and install [Yellow](https://github.com/datenstrom/yellow/).
2. Download and unzip [Splice plugin](https://github.com/SAMY2K/yellow-plugin-splice/archive/master.zip).
3. Copy `splice.php` into your `system/plugins` folder.

To uninstall delete the plugin.

How to embed an audio track?
----------------------------
Create a `[splice]` shortcut.
 
The following arguments are available:

`ID` = code between [Splice](https://splice.com/release/?id=) and '&' in the share dialog box, e.g. `https://splice.com/release/?id=de89b88a-0976-c980-d668-c382d2490195c84c1fc&` (Don't copy the last '&' !!!)  
`STYLE` = audio project style, e.g. `left`, `center`, `right`   
`WIDTH` = audio project width, pixel or percent  
`HEIGHT` = audio project height, pixel or percent. If you set the width to 100% then the best results are achieved either with 175 or 400 height  

Example
-------
Embedding an audio track:

    [splice de89b88a-0976-c980-d668-c382d2490195c84c1fc]
    [splice de89b88a-0976-c980-d668-c382d2490195c84c1fc right 500 300]
    [splice de89b88a-0976-c980-d668-c382d2490195c84c1fc - 100% 175]
