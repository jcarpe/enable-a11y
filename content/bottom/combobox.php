<script type="module">
    import comboboxes from "./js/modules/combobox.js";

    comboboxes.init();
</script>
<script>
        const autocompleteSubmit = new function () {
            this.init = () => {
                document.getElementById('aria-example-2a').addEventListener('combobox-change', (e) => {
                    const { currentTarget } = e;
                    const { value } = currentTarget;
                    const q = `https://www.google.com/search?${new URLSearchParams(`q=${value}`).toString()}`
                    location.href=q;
                });
            }
            this.init();
        }
    </script>