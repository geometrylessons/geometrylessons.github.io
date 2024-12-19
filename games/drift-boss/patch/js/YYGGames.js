if (typeof consoleLog== 'undefined') {
  consoleLog= console.log;
}

xlocation= new Proxy(location, {
  get: function(target, property, receiver) {
    console.log("--fx--xlocation--get--property--", property);
    let targetObj = target[property];
    if (typeof targetObj == "function") {
      return (...args) => target[property].apply(target, args);
    } else {
      if (property== "host" || property=="hostname") {
        return "localhost";
      }
      if (property== "href") {
        return "https://localhost/";
      }
      if (property== "origin") {
        return "https://localhost/";
      }
      return targetObj;
    }
  },
  set: function(target, property, receiver) {
    console.log("--fx--xlocation--set--property--", property, receiver);
    return true;
  }
});

YYG= {
  TYPE: {
    INTERSTITIAL: 0,
    REWARD: 1
  },
  Event: {
    YYGSDK_INITIALIZED: 1,
  },
  EventHandler: {
    create: function(target, callback) {
      consoleLog("--fx--YYG--EventHandler--create--", arguments);
      callback();
    }
  }  
}

YYG4M3SList= [{
    "id": "3814",
    "name": "Princess Glitter Coloring",
    "thumb": "patch/images/null.png",
    "appName": "Princess-Glitter-Coloring"
  }, {
    "id": "3509",
    "name": "Princess Salon Frozen Party",
    "thumb": "patch/images/null.png",
    "appName": "Princess-Salon-Frozen-Party"
}];

YYGG4M3S= function () {
  // ***** UTILS *****
  function loadJS(FILE_URL, callback) {
    let scriptEle = document.createElement("script");
  
    scriptEle.setAttribute("src", FILE_URL);
    scriptEle.setAttribute("type", "text/javascript");
    scriptEle.setAttribute("async", true);
  
    document.body.appendChild(scriptEle);
    
    // Success
    scriptEle.addEventListener("load", () => {
      console.log("--fx--gdsdk--loadJS Done--");
      callback(true);
    });
    
     // Error
    scriptEle.addEventListener("error", () => {
      console.log("--fx--gdsdk--loadJS Error--");
      callback(false);
    });
  }
  
  // ***** INITALIZE *****
  this.forG4M3S= YYG4M3SList;

  this.init=function(appName, initFunc) {
    consoleLog("--fx--YYGG4M3S--init--", arguments);
    this.appName= appName;
    setTimeout(initFunc, 1000);
    // options.complete();
    return true;
  }

  this.__init__= function() {
    consoleLog("--fx--YYGG4M3S--__init__--", arguments);
  }

  this.icon= {}
  this.gameBox= {
    "game1": {},
    "game2": {},
  }
  this.gameBanner= {}
  
  this.startupByYad= function (obj) {
    console.log("--fx--YYGG4M3S--startupByYad--", obj);
  }
  
  this.startup= function(options) {
    consoleLog("--fx--YYGG4M3S--startup--", options);    
    options.complete();    
  }

  this.getForG4M3S= function() {
    consoleLog("--fx--YYGG4M3S--channel--", arguments);    
    return new Promise((resolve, reject)=> {
      resolve(this.forG4M3S);
    });
  }
  
  // ***** ADS CONTROL *****
  this.getAdPlatformType= function() {
    consoleLog("--fx--YYGG4M3S--getAdPlatformType--", arguments);
    return true;
  }

  this.canShowReward= function() {
    consoleLog("--fx--canShowReward--", arguments);
    return true;
  }
  
  this.showSplash = function () {
    consoleLog("--fx--YYGG4M3S--showSplash--", arguments);
  }
    
  this.showInterstitial= function(func) {
    consoleLog("--fx--showInterstitial--", arguments);
    loadJS("https://www.ubg235.com/ads/commercial.js", (success)=> {
      if (success) {
        console.log("--fx--showInterstitial--Done--");        
      } else {
        console.log("--fx--showInterstitial--Rejected--");
      }
      func();
    });
    return true;
  }

  this.showReward= function(func) {    
    consoleLog("--fx--showReward--", arguments);
    loadJS("https://www.ubg235.com/ads/rewarded.js", (success)=> {
      if (success) {
        console.log("--fx--showReward--Done--");
        func();
      } else {
        console.log("--fx--showReward--Rejected--");
      }
    });    
  }

  this.onAfterShowAd= function(func) {
    consoleLog("--fx--onAfterShowAd--", arguments);
    func();
    return true;
  }

  this.on= function(event, callback) {
    consoleLog("--fx--event--", event);
    return true;
  }

  this.adsManager= {
    request: function(arguments) {
      consoleLog("--fx--adsManager--request--", arguments);      
    }
  };

  // ***** LINKS *****
  this.navigate= function(t, c, o) {
    consoleLog("--fx--YYGG4M3S--navigate--", t, c, o);
  }
}

YYGG4M3S= new YYGG4M3S();
