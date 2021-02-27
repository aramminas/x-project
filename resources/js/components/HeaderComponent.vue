<template>
    <header class="header">
        <div class="fixed-header">
            <div class="container">
                <div class="row">
                    <div class="col-2 logo-content">
                        <div>
                            <figure>
                                <img src="/images/logo-bitcoin.jpg" alt="logo">
                            </figure>
                            <span>Bitcoin chart</span>
                        </div>
                    </div>
                    <div class="col-8 menu-content">
                        <nav>
                            <a href="#">Home</a>
                            <a href="#">About</a>
                            <a href="#">Products</a>
                            <a href="#">Services</a>
                            <a href="#">Contact Us</a>
                        </nav>
                    </div>
                    <div class="col-2 login-content">
                        <span class="navbar-collapse">
                            <a href="#" class="login"><i class="fa fa-fw fa-user"></i> Log In</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        name: 'HeaderComponent',
        props : [],
        data: () => {
          return {
          }
        },
        mounted() {
            console.log('HeaderComponent mounted.');
        },
        methods: {

        },
        created() {

        },
        destroyed() {

        },
    }
</script>
<style lang="scss" scoped>
.fixed-header {
    & .container {
        max-width: 95%;

        & .menu-content{
            align-items: center;
            justify-content: center;
            display: flex;
        }
    }

    width: 100%;
    position: relative;
    padding: 10px 0;
    color: #fff;
    top: 0;
    border-bottom: 1px solid #313646;
    background-color: #181828;

    & nav a {
        color: #fff;
        text-decoration: none;
        padding: 7px 25px;
        display: inline-block;
        font-weight: 600;
        transition-duration: .3s;

        &:hover {
            color: #8d8d8d;
        }
    }
}

.navbar-collapse {
    margin-top:5px;
    display: inline-block;
    & .login {
        color:#d9d9d9;
        margin-right:.5rem;
        text-decoration:none;

        &:hover {
            color:#fff;
        }
    }
}

.logo-content {
    & > div {
        display: flex;
        align-items: center;
        & figure {
            margin: 0 15px 0 0;
            border: 1px solid #383847;
            box-shadow: rgba(229, 229, 241, 0.1) 0 4px 16px, rgba(229, 229, 241, 0.1) 0 8px 24px, rgba(229, 229, 241, 0.1) 0 16px 56px;
            & img {
                width: 60px;
            }
        }

        & span {
            display: inline-flex;
            font-size: 20px;
            font-family: revert;
        }
    }
}

.login-content {
    display: flex;
    align-items: center;
}
</style>
