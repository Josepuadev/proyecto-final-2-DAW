import { TestBed } from '@angular/core/testing';

import { Rutinaspersonalizadasservice } from './rutinaspersonalizadasservice';

describe('Rutinaspersonalizadasservice', () => {
  let service: Rutinaspersonalizadasservice;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(Rutinaspersonalizadasservice);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
