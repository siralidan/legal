export default function currencyUSD(value) {
  return new Intl.NumberFormat('en-US', {style: 'currency', currency: 'Ksh'})
    .format(value);
}
