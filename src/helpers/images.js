export const getImageURL = (imageName) => {
    if (!imageName) return

    return new URL(`../assets/images/${imageName}`, import.meta.url).href
}
