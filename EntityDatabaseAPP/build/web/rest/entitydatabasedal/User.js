/*
* Support js for User
*/

function User(uri_) {
    this.uri = uri_;
}

User.prototype = {

   getUri : function() {
      return this.uri;
   },
   
   getRemote : function() {
      return new UserRemote(this.uri);
   },

   getItems : function() {
      return new Array();
   }
}

function UserRemote(uri_) {
    this.uri = uri_+'?expandLevel=1';
}

UserRemote.prototype = {

   retrieveUser : function(email) {
      var link = new String(this.uri+'/'+email);
      return link;
   },

   retrieveAllUsers : function() {
      var link = new String(this.uri+'/');
      return link;
   },

   deleteUser : function(email) {
      var link = new String(this.uri+'/'+email);
      return link;
   },

   addUser : function() {
      var link = new String(this.uri+'/');
      return link;
   },

   updateUser : function(email) {
      var link = new String(this.uri+'/'+email);
      return link;
   },

   getUsersAsJsonArray : function() {
      var link = new String(this.uri+'/');
      return link;
   }
}
