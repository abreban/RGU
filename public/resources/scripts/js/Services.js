/**
 * Created by bogdan on 11/25/2015.
 */


app.factory("AdventureService",["$resource", function($resource){
    var route="/api/adventure/:target/:action";

    return $resource(route, {target: "@target", action: "@action"}, {
        query: { method: "GET", isArray: false},
        post: {method: "POST"},
        update: {method: "PUT"},
        remove: {method: "DELETE"}
    })
}]);


app.factory("AuthorService",["$resource", function($resource) {
    var route="/api/author/:target/:action";
    return $resource(route, {target: "@target", action: "@action"}, {
        query: { method: "GET", isArray: false},
        post: {method: "POST"},
        put: {method: "PUT", params: {}},
        remove: {method: "DELETE"}
    })
}]);

