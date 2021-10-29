<p>決済ページへリダイレクトします。</p>
<script src="https://js.stripe.com/v3/"></script>
<script>
  const publicKey = '{{ $publicKey }}'
  const stripe = Stripe(publicKey)

  window.onload = () => {
    stripe.redirectToCheckout({
      sessionId: '{{ $session->id }}'
      })
      .then((result) => {
        window.location.href = '{{ route('user.cart.cancel') }}';
        });
  }

</script>
