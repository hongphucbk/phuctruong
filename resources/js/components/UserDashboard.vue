<template>
    <div class="user-dashboard">
        This is user dashboard
        <div class="list-user-comp">
            <ListUser></ListUser>
        </div>
        <div class="user-detail-comp">
            <UserDetail></UserDetail>
        </div>
    </div>
</template>

<script>
	import ListUser from './ListUser.vue'
    import UserDetail from './UserDetail.vue'
    export default {
        components: {
            ListUser,
            UserDetail
        }
    }

    
    
</script>

<style lang="scss" scoped>
</style>
