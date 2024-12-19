if (typeof consoleLog== 'undefined') {
  consoleLog= console.log;
}

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
    
  this.showInterstitial= function(options) {
    consoleLog("--fx--showInterstitial--", options);
    options.beforeShowAd();
    options.afterShowAd();    
    return true;
  }

  this.showReward= function(options) {
    options.rewardComplete();
    consoleLog("--fx--showReward--", arguments);
  }

  this.onAfterShowAd= function(callback) {
    consoleLog("--fx--onAfterShowAd--", arguments);
    callback();
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

YYGSDK= new YYGG4M3S();
YYGG4M3S= new YYGG4M3S();