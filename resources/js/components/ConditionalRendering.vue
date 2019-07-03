<template>
    <div class="conditional-rendering">
        <div class="block-1" v-if="currentBlock == 1">
            This is block 1
        </div>
        <div class="block-2" v-else-if="currentBlock == 2">
            This is block 2
        </div>
        <div class="block-2" v-else>
            This is block 3
        </div>

        <div>
            <button @click="toggleActive">Button</button>
        </div>
        <div>
            <button @click="showBlock(1)">Button 1</button>
        </div>
        <div>
            <button @click="showBlock(2)">Button 2</button>
        </div>
        <div>
            <button @click="showBlock(3)">Button 3</button>
        </div>

    </div>
</template>

<script>
    export default {
    	data() {
            return {
                isActive: true,
                currentBlock: 1
            }
        },
        methods: {
            toggleActive() {
                if(this.isActive == true) {
                    this.isActive = false
                }
                else {
                    this.isActive = true
                }
            },
            showBlock(number) {
                this.currentBlock = number
            }
        }
    }
</script>

<style lang="scss" scoped>
</style>