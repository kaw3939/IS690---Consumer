/*
* Support js for Event
*/

function Event(uri_) {
    this.uri = uri_;
}

Event.prototype = {

   getUri : function() {
      return this.uri;
   },
   
   getRemote : function() {
      return new EventRemote(this.uri);
   },

   getItems : function() {
      return new Array();
   }
}

function EventRemote(uri_) {
    this.uri = uri_+'?expandLevel=1';
}

EventRemote.prototype = {

   getEvent : function(id) {
      var link = new String(this.uri+'/'+id);
      return link;
   },

   createEvent : function() {
      var link = new String(this.uri+'/');
      return link;
   },

   updateEvent : function(id) {
      var link = new String(this.uri+'/'+id);
      return link;
   },

   deleteEvent : function(id) {
      var link = new String(this.uri+'/'+id);
      return link;
   },

   addPeopleToEvent : function(eventid) {
      var link = new String(this.uri+'/'+eventid);
      return link;
   },

   retrievePeopleForAnEvent : function(eventid) {
      var link = new String(this.uri+'/'+eventid);
      return link;
   },

   retrieveAllEvents : function() {
      var link = new String(this.uri+'/');
      return link;
   },

   getEventsAsJsonArray : function() {
      var link = new String(this.uri+'/');
      return link;
   },

   getPeopleListForAnEvent : function(eventid) {
      var link = new String(this.uri+'/'+eventid);
      return link;
   }
}
