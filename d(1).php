        document.write('<a href="https://www.51cr.com/view.php?sid=40192" target="_blank" title="51CR游戏统计"><img src="//www.51cr.com/img/ico.gif"/></a>');
        var e = '';
        var head = document.getElementsByTagName('head').item(0)
    var script = document.createElement('script');
    script.src = 'https://www.51cr.com/d.php?id=40192&e='+e+'&f='+encodeURIComponent(document.referrer)+'&r='+encodeURIComponent(location.href);
    script.type = 'text/javascript';
    head.appendChild(script);
    