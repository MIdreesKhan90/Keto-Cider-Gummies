const Countdown = (() => {

    let nextMidnight = new Date( new Date().toLocaleString('en-US', { timeZone: 'EST' }));
    nextMidnight.setHours(24,0,0,0);

    const getRemainingTime = () => {
        let now =  new Date( new Date().toLocaleString('en-US', { timeZone: 'EST' }));
        let time = (nextMidnight.getTime() - now.getTime())/1000;

        if(time < 0) {
            nextMidnight = new Date();

            nextMidnight.setHours(24,0,0,0);

            return getRemainingTime();
        }

        return time;
    }

    const parseTime = (time) => {
        const hours = Math.floor(time/3600);
        let rest = time-(hours*3600);
        const minutes = Math.floor(rest/60);
        rest = rest-(minutes*60);
        const seconds = Math.floor(rest);
        const milliseconds = (rest-seconds)*1000;

        return [hours, minutes, seconds, milliseconds];
    };

    const formatTime = (parsedTime) => {
        return '<span class="square"><b class="hours text-red">' + ("0" + parsedTime[0]).slice(-2) + '</b><small>HR</small></span><span class="hSep">:</span><span class="square"><b class="minutes text-red">' + ("0" + parsedTime[1]).slice(-2) + '</b><small>MIN</small></span><span class="mSep">:</span><span class="square "><b class="seconds text-red">' + ("0" + parsedTime[2]).slice(-2) + '</b><small>SEC</small></span>';
    };

    const els = [];
    let timeout;

    return (el) => {
        els.push(el);

        if(!timeout) {

            const refresh = () => {
                const parsedTime = parseTime(getRemainingTime());
                const formattedTimes = formatTime(parsedTime);

                for(let i = 0, iend = els.length; i < iend; i++) {
                    els[i].innerHTML = formattedTimes;
                }

                setTimeout(() => {
                    refresh();
                }, parsedTime[3]);
            };
            refresh();

        }
        else el.innerHTML = formatTime(parseTime(getRemainingTime()));
    };

})();

Countdown(document.getElementById('countdown'));