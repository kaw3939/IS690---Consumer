/*
* Support js for Person
*/

function Person(uri_) {
    this.uri = uri_;
}

Person.prototype = {

   getUri : function() {
      return this.uri;
   },
   
   getRemote : function() {
      return new PersonRemote(this.uri);
   },

   getItems : function() {
      return new Array();
   }
}

function PersonRemote(uri_) {
    this.uri = uri_+'?expandLevel=1';
}

PersonRemote.prototype = {

   retrievePerson : function(id) {
      var link = new String(this.uri+'/'+id);
      return link;
   },

   updatePerson : function(id) {
      var link = new String(this.uri+'/'+id);
      return link;
   },

   deletePerson : function(id) {
      var link = new String(this.uri+'/'+id);
      return link;
   },

   createPerson : function() {
      var link = new String(this.uri+'/');
      return link;
   },

   retrieveAllPeople : function() {
      var link = new String(this.uri+'/');
      return link;
   },

   getPeopleAsJsonArray : function() {
      var link = new String(this.uri+'/');
      return link;
   }
}
