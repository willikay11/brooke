<script>
    export default {
        data: function () {
            return {
                rowCollection: [],
                showSpinner: false,
                showMainIcon: true,
                limit: 1,
            }
        },
        created()
        {
            this.callServer();
        },
        methods: {
            callServer: function () {
                var self = this;

                self.showMainIcon = false;
                self.showSpinner = true;

                return self.axios.get('/api/blogs/limit/'+ self.limit)
                    .then(function (response) {
                        self.rowCollection = response.data.data;
                        self.showSpinner = false;
                        self.showMainIcon = true;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },

            loadMore: function () {

                var self = this;

                self.showSpinner = true;
                self.showMainIcon = false;

                self.limit += 1;

                return self.axios.get('/api/blogs/limit/'+ self.limit)
                    .then(function (response) {
                        self.rowCollection = response.data.data;
                        self.showSpinner = false;
                        self.showMainIcon = true;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            }
        }
    }
</script>