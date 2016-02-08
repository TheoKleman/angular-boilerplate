app.service('promiseTest', function($http, $q){
    this.url = "https://api.twitch.tv/kraken/channels/domingo";
    this.dataTwitch = {};
    var self = this;

    this.getTwitchData = function(url){
        var deferred = $q.defer();

        $http.get(url)
            .success(function(data, status){
                var dataTwitch = data;
                deferred.resolve(dataTwitch);
            })
            .error(function(data, status){
                deferred.reject('error');
            })
        return deferred.promise;
    };

});
