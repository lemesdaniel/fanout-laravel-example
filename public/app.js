var app = new Vue({
  el: '#list',
  data: {
    posts: [
      {
        title: 'Como integrar o fanout com laravel'
      },
    ]
  }
})

var add = new Vue({
  el: '#add',
  data: {
        title: '',
        msg: ''
    },
  methods: {
        addPost: function(e) {
            e.preventDefault();
            if (!this.title) return;
            $.post('/novo', { title: this.title });
            
            this.title = '';
            this.msg = 'Adicionado com sucesso';
        }
  }      
})

var client = new Faye.Client('https://da1cbe49.fanoutcdn.com/bayeux');
client.subscribe('/test', function (item) {
    app.posts.push({ title: item.data.message })
});

