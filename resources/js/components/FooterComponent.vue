<template>
    <footer class="footer">
        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-md-3">
                        <div class="footer-site-info">
                            {{ new Date() | moment("YYYY") }} © <a href="/" target="_blank">X Project Company</a>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <nav id="footer-navigation" class="site-navigation footer-navigation centered-box" role="navigation">
                            <ul id="footer-menu" class="nav-menu styled clearfix inline-inside">
                                <li v-for="(contact, i) in contacts" :key="i" id="menu-item-" :id="i"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-" :class="i">
                                    <a href="#"><i class="fa " :class="contact.icon" aria-hidden="true"></i>{{contact.title}}</a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-md-3">
                        <div id="footer-socials">
                            <div class="socials inline-inside socials-colored">
                                <a v-for="(social, i) in socials" :key="i" href="#" :title="social.title" class="socials-item">
                                    <i :class="social.icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
</template>

<script>
    export default {
        name: 'FooterComponent',
        props : [],
        mounted() {
            console.log('FooterComponent mounted.')
        },
        data: () => {
            return {
                fileName: 'FooterComponent',
                contacts: [
                    {icon: "fa-map-marker", title: "Yerevan, Armenia"},
                    {icon: "fa-phone", title: "(+374) 55 61 00"},
                    {icon: "fa-envelope", title: "contact@x-project.com"},
                ],
                socials: [
                    {title: "Facebook", icon: "fab fa-facebook-f facebook"},
                    {title: "Twitter", icon: "fab fa-twitter twitter"},
                    {title: "Instagram", icon: "fab fa-instagram instagram"},
                    {title: "YouTube", icon: "fab fa-youtube youtube"},
                    {title: "Telegram", icon: "fab fa-telegram telegram"},
                ],
            }
        },
        methods: {
        },
        created() {

        }
    }
</script>

<style lang="scss" scoped>
    footer li {
        font-size: 15px;
        line-height: 22px;
    }

    .footer-bottom {
        padding: 15px 0;
        border-top: 1px solid #313646;
        background-color: #181828;
        color: #b0b0b0;
        font-family: rubik, Arial, serif;

        & a:hover {
            color: white;
        }

        & ul {
            margin: 0;
        }

        & .footer-site-info {
            font-size: 15px;
            padding-top: 10px;
        }

        & #footer-navigation, & #footer-navigation li a {
            color: #99a9b5;
            padding-top: 15px;

            &:hover {
                color: white;
            }
        }

        & .inline-inside {
            font-size: 0;
            line-height: 0;
        }

        &  #footer-menu {
            padding: 0;

            & li {
                display: inline-block;
                padding: 0 21px;
                position: relative;
                line-height: 1;

                & a i {
                    margin-right: 5px;
                }
            }

            & li+li:before {
                content: '';
                width: 0;
                height: 100%;
                position: absolute;
                left: -1px;
                top: 0;
                font-size: 0;
                border-left: 1px solid #232234;
                border-right: 1px solid #333146;
            }
        }

    }

    #footer-socials {
        text-align: right;

        & .socials {
            text-align: right;
            margin: 0 -7px;
            display: inline-block;
            vertical-align: middle;
        }
    }

    .clearfix:after, .clearfix:before {
        content: "";
        display: table;
    }

    a.socials-item {
        display: inline-block;
        vertical-align: top;
        text-align: center;
        -o-transition: all 0.3s;
        -webkit-transition: all 0.3s;
        transition: all 0.3s;
        margin: 0 5px;
        line-height: 16px;
        padding: 10px;
        border-radius: 50%;
        background-color: #141421;
        border: 1px solid #2e2e4c;
        box-shadow: 3px 9px 16px rgba(0,0,0,0.4), -3px -3px 10px rgba(255,255,255, 0.06), inset 14px 14px 26px rgba(0,0,0,0.3), inset -3px -3px 15px rgba(255,255,255, 0.05);
    }

    a.socials-item:hover {
        box-shadow: 0 0 20px rgba(84, 1, 74, 0.7);
        border-color: rgba(255, 6, 224, 0.61);
        background: linear-gradient(to right, rgba(255, 9, 9, 0.12941176470588237), #c000ffb5, rgba(255, 0, 94, 0.14));
    }

    .socials-item i {
        display: inline-block;
        font-weight: normal;
        width: 1em;
        height: 1em;
        line-height: 1;
        font-size: 16px;
        text-align: center;
        vertical-align: top;
        font-feature-settings: normal;
        font-kerning: auto;
        font-language-override: normal;
        font-size-adjust: none;
        font-stretch: normal;
        font-style: normal;
        font-synthesis: weight style;
        font-variant: normal;
        text-rendering: auto;
    }

    .facebook {
        color: #4e64b5;
    }

    .twitter {
        color: #00aced;
    }
    .instagram {
        color: #9a8f62;
    }
    .youtube {
        color: #c82929;
    }

    .telegram {
        color: #2ca5e0;
    }
</style>
