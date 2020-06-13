<template>
    <div>
        <div class="emojis">
            <div class="emoji" v-for="emoji in emojis">
                {{ emoji }}
            </div>
        </div>
    </div>
</template>

<style>
    .emojis {
        margin: 10%;
    }
    .emoji {
        display: inline-block;
        font-size: 24vw;
        line-height: 25vw;
    }
</style>

<script>
    import EmojiButton from '@joeattardi/emoji-button';

    export default {
        props: ['emojis'],
        data() {
            return {
                picker: new EmojiButton({
                    theme: 'auto',
                    style: 'twemoji',
                    autoHide: false,
                    autoFocusSearch: false,
                    emojisPerRow: 6,
                    showPreview: false,
                    showRecents: false,
                    rootElement: this.$refs.root
                }),
            }
        },
        mounted() {
            console.log('Component mounted.')
            // this.picker.showPicker(this.$refs.emojiSelector);
        }
    }
</script>
