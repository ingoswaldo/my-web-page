import { ref } from 'vue'
import { createGlobalState } from '@vueuse/core'

export const useGlobalState = createGlobalState(
    () => {
        const menuActive = ref('#home')
        return { menuActive }
    }
)
